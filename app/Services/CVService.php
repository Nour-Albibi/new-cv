<?php

namespace App\Services;

use App\Models\CustomerCv;
use App\Models\CustomerCvCourse;
use App\Models\CustomerCvEducation;
use App\Models\CustomerCvLanguage;
use App\Models\CustomerCvProject;
use App\Models\CustomerCvSkill;
use App\Models\CustomerCvSummery;
use App\Models\CustomerCvWorkHistory;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Jackiedo\Cart\Facades\Cart;
use function Ramsey\Uuid\v1;

class CVService
{
    public static function getCVTemplates()
    {
        return Template::all();
    }

    public static function syncCustomer(){
        $cvItem=self::getCVItem();
        CustomerCv::where('id',$cvItem->id)->update(['customer_id'=>Auth::guard('customer')->user()->id]);
        Session::forget('redirect_after_login');
    }
    public static function ResetCVDataForCreateNew(){
        session('current_step_num',0);
        Session::forget('customer_cv_data');
        Session::forget('show_confirm');
        $cart=Cart::name('cv');
        $cart->destroy();
    }
    public static function storeCVData($step_num, $data)
    {
        switch ($step_num) {
            case 0:
                //Store new data or update
                $cvItem=self::getCVItem();
                if(!empty($cvItem)){
                    //update data
                    $customerCV = self::updatePersonalInformation($cvItem->id,$data);
                    $addedItem=$cvItem;
                }else{
                    //Add new
                    $customerCV = self::storePersonalInformation($data);
                    if ($customerCV != null) {
                        $addedItem=CartService::AddToCart($customerCV);
                    }
                }
                return json_encode(['addedItem'=>$addedItem,'customerCV'=>$customerCV]);
            case 1:
                self::storeWorkHistory($data);
                break;
            case 2:
                self::storeProjects($data);
                break;
            case 4:
                self::storeEducation($data);
                break;
            case 5:
                self::storeCourses($data);
                break;
            case 6:
                self::storeSkills($data);
                break;
            case 7:
                self::storeSummary($data);
                break;
            case 8:
                self::storeLanguages($data);
                break;
        }
    }
    public static function storeLanguages($data){
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            foreach ($data as $language) {
                CustomerCvLanguage::create([
                    'customer_cv_id' => $cvItem->id,
                    'language_ar' => $language['language_ar'] ?? '',
                    'language_en' => $language['language_en'] ?? '',
                    'language_id' => $language['language_id'] ?? '',
                    'level_ar' => $language['level_ar'] ?? '',
                    'level_en' => $language['level_en'] ?? '',
                    'information_ar' => $language['information_ar'] ?? '',
                    'information_en' => $language['information_en'] ?? '',
                ]);
            }
        }
        return true;
    }
    public static function storeSummary($data)
    {
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            CustomerCvSummery::create([
                'customer_cv_id' => $cvItem->id,
                'content_ar' => $data['content_ar'] ?? '',
                'content_en' => $data['content_en'] ?? '',
            ]);
        }
        return true;
    }

    public static function storeSkills($data)
    {
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            foreach ($data as $skill) {
                CustomerCvSkill::create([
                    'customer_cv_id' => $cvItem->id,
                    'content_ar' => $skill['content_ar'] ?? '',
                    'content_en' => $skill['content_en'] ?? '',
                    'skill_id' => $skill['skill_id'] ?? '',
                ]);
            }
        }
        return true;
    }
    public static function deleteOldCourses($cv){
        if(count($cv->customer_cv_course)){
            $cv->customer_cv_course()->delete();
        }
    }
    public static function storeCourses($data)
    {
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)) {
                self::deleteOldCourses($customer_cv);
                foreach ($data as $course) {
                    CustomerCvCourse::create([
                        'customer_cv_id' => $cvItem->id,
                        'course_name_ar' => $course['course_name_ar'] ?? '',
                        'course_name_en' => $course['course_name_en'] ?? '',
                        'trainer_ar' => $course['trainer_ar'] ?? '',
                        'trainer_en' => $course['trainer_en'] ?? '',
                        'start_date' => $course['start_date'] ?? '',
                        'end_date' => $course['end_date'] ?? '',
                    ]);
                }
            }
        }
        return true;
    }
    public static function deleteOldCEducations($cv){
        if(count($cv->customer_cv_education)){
            $cv->customer_cv_education()->delete();
        }
    }
    public static function storeEducation($data)
    {
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)) {
                self::deleteOldCEducations($customer_cv);
                foreach ($data as $education) {
                    CustomerCvEducation::create([
                        'customer_cv_id' => $cvItem->id,
                        'institution_name_en' => $education['institution_name_en'] ?? '',
                        'institution_name_ar' => $education['institution_name_ar'] ?? '',
                        'city_ar' => $education['city_ar'] ?? '',
                        'city_en' => $education['city_en'] ?? '',
                        'qualification_id' => $education['qualification_id'] ?? '',
                        'field_study_ar' => $education['field_study_ar'] ?? '',
                        'field_study_en' => $education['field_study_en'] ?? '',
                        'honours_ar' => $education['honours_ar'] ?? '',
                        'honours_en' => $education['honours_en'] ?? '',
                        'start_date' => $education['start_date'] ?? '',
                        'end_date' => $education['end_date'] ?? '',
                    ]);
                }
            }
        }
        return true;
    }
    public static function deleteOldCProjects($cv){
        if(count($cv->customer_cv_project)){
            $cv->customer_cv_project()->delete();
        }
    }
    public static function storeProjects($data)
    {
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)){
                self::deleteOldCProjects($customer_cv);
                foreach ($data as $project) {
                    CustomerCvProject::create([
                        'customer_cv_id' => $cvItem->id,
                        'project_name_en' => $project['project_name_en'] ?? '',
                        'project_name_ar' => $project['project_name_ar'] ?? '',
                        'description_en' => $project['description_en'] ?? '',
                        'description_ar' => $project['description_ar'] ?? '',
                        'start_date' => $project['start_date'] ?? '',
                        'end_date' => $project['end_date'] ?? '',
                    ]);
                }
            }
        }
        return true;
    }
    public static function deleteOldCVWorkHistory($cv){
        if(count($cv->customer_cv_work_history)){
            $cv->customer_cv_work_history()->delete();
        }
    }
    public static function storeWorkHistory($data)
    {
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        $customer_cv=CustomerCv::find($cvItem->id);
        if(!empty($customer_cv)){
            self::deleteOldCVWorkHistory($customer_cv);
            foreach ($data as $work) {
                CustomerCvWorkHistory::create([
                    'customer_cv_id' => $cvItem->id,
                    'job_title_ar' => $work['job_title_ar'] ?? '',
                    'job_title_en' => $work['job_title_en'] ?? '',
                    'employeer_ar' => $work['employeer_ar'] ?? '',
                    'employeer_en' => $work['employeer_en'] ?? '',
                    'city_ar' => $work['city_ar'] ?? '',
                    'city_en' => $work['city_en'] ?? '',
                    'country_ar' => $work['country_ar'] ?? '',
                    'country_en' => $work['country_en'] ?? '',
                    'start_date' => $work['start_date'] ?? null,
                    'end_date' => $work['end_date'] ?? null,
                    'current' => $work['current'] ?? 0,
                    'experience_description_ar' => $work['experience_description_ar'] ?? '',
                    'experience_description_en' => $work['experience_description_en'] ?? ''
                ]);
            }
        }
        return true;
    }
    public static function updatePersonalInformation($id,$data){
      return CustomerCv::where('id',$id)->update([
            'template_id' => session('chosen_template_id'),
            'template_color' => session('chosen_cv_color'),
            'cv_language' => session('chosen_cv_language'),
            'customer_id' => Auth::guard('customer')->user()->id,
            'first_name' => $data['first_name'],
            'first_name_ar' => $data['first_name_ar'] ?? '',
            'surename' => $data['surename'],
            'surename_ar' => $data['surename_ar'] ?? '',
            'phone' => $data['phone'],
            'email' => $data['email'] ?? '',
            'image' => $data['image'] ?? '',
            'open_for_remote' => $data['open_for_remote'] ?? 0,
            'linkedlin_url' => $data['linkedlin_url'] ?? '',
            'address_ar' => $data['address_ar'] ?? '',
            'address_en' => $data['address_en'] ?? '',
            'city_town_ar' => $data['city_town_ar'] ?? '',
            'city_town_en' => $data['city_town_en'] ?? '',
            'country_ar' => $data['country_ar'] ?? '',
            'country_en' => $data['country_en'] ?? '',
            'postcode' => $data['postcode'] ?? '',
            'website' => $data['website'] ?? '',
            'driving_licence' => $data['driving_licence'] ?? '',
            'nationality' => $data['nationality'] ?? '',
        ]);
    }
    public static function storePersonalInformation($data)
    {
        $customer_id = 0;
        if (Auth::guard('customer')->check()) {
            $customer_id = Auth::guard('customer')->user()->id;
        }
        if (self::checkChosenCVSetting()) {
            $customerCV = CustomerCv::create([
                'template_id' => session('chosen_template_id'),
                'template_color' => session('chosen_cv_color'),
                'cv_language' => session('chosen_cv_language'),
                'customer_id' => $customer_id,
                'first_name' => $data['first_name'],
                'first_name_ar' => $data['first_name_ar'] ?? '',
                'surename' => $data['surename'],
                'surename_ar' => $data['surename_ar'] ?? '',
                'phone' => $data['phone'],
                'email' => $data['email'] ?? '',
                'image' => $data['image'] ?? '',
                'open_for_remote' => $data['open_for_remote'] ?? 0,
                'linkedlin_url' => $data['linkedlin_url'] ?? '',
                'address_ar' => $data['address_ar'] ?? '',
                'address_en' => $data['address_en'] ?? '',
                'city_town_ar' => $data['city_town_ar'] ?? '',
                'city_town_en' => $data['city_town_en'] ?? '',
                'country_ar' => $data['country_ar'] ?? '',
                'country_en' => $data['country_en'] ?? '',
                'postcode' => $data['postcode'] ?? '',
                'website' => $data['website'] ?? '',
                'driving_licence' => $data['driving_licence'] ?? '',
                'nationality' => $data['nationality'] ?? '',
            ]);
            return $customerCV;
        }
        return null;
    }
    public static function checkChosenCVSetting(){
        if(empty(session('chosen_template_id'))){Session::put('chosen_template_id',1);}
        if(empty(session('chosen_cv_color'))){Session::put('chosen_cv_color','#ccc');}
        if(empty(session('chosen_cv_language'))){Session::put('chosen_cv_language',1);}
        return true;
    }
    public static function getCVItem()
    {
        $cart = Cart::name('cv');
        return $cart->getDetails()->get('items')->first();
    }

    public static function getDataArraysFromRequest($data)
    {
        unset($data['_token']);
        unset($data['step']);
        return $data;
    }

}
