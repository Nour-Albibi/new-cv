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
use App\Models\ProfessionalSummary;
use App\Models\Skill;
use App\Models\Subscription;
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
        if(!empty($cvItem)){
            CustomerCv::where('id',$cvItem->id)->update(['customer_id'=>Auth::guard('customer')->user()->id]);
        }
        Session::forget('redirect_after_login');
    }
    public static function syncColorAndTemplateToCurrentCV(){
        $cvItem=self::getCVItem();
        if(!empty($cvItem)){
            CustomerCv::where('id',$cvItem->id)->update(['template_color'=>session('chosen_cv_color')
                ,'template_id'=>session('chosen_template_id')]);
        }
    }
    public static function syncCVLanguage($id){
        CustomerCv::where('id',$id)->update(['cv_language'=>session('chosen_cv_language')]);
    }
    public static function ResetCVDataForCreateNew(){
        Cart::name('cv')->destroy();
        Session::forget(['show_confirm','current_step_num','show_confirm']);
        session('current_step_num',0);
        self::checkChosenCVSetting();
    }
    public static function getSkillSuggestions($possible_keys){
        if(isset($possible_keys['search_keys']) && !empty($possible_keys['search_keys'])){
            $related_skills=Skill::select('skills.*')->join('job_titles','job_titles.id','skills.job_title_id')
                ->where('job_titles.name_ar','like','%'.$possible_keys['search_keys'].'%')
                ->orwhere('job_titles.name_en','like','%'.$possible_keys['search_keys'].'%')
                ->get();

        }else{
            $cvItem=self::getCVItem();
            $newest_work=CustomerCvWorkHistory::select('id','job_title_ar','job_title_en','job_title_id')
                ->where('customer_cv_id',$cvItem->id)->latest()->first();
            if(!empty($newest_work)){
                if(!empty($newest_work->job_title_id)){
                    $related_skills=Skill::where('job_title_id',$newest_work->job_title_id)->get();
                }else{
                    $related_skills=Skill::select('skills.*')->join('job_titles','job_titles.id','skills.job_title_id')
                        ->where('job_titles.name_ar','like','%'.$newest_work->job_title_ar.'%')
                        ->orwhere('job_titles.name_en','like','%'.$newest_work->job_title_en.'%')
                        ->get();
                }
            }else{
                $related_skills=Skill::where('is_general',1)->get();
            }
        }

        return $related_skills;
    }
    public static function getSummariesSuggestions($possible_keys){
        $related_skills=null;
        if(isset($possible_keys['search_keys']) && !empty($possible_keys['search_keys'])){
            $related_skills=ProfessionalSummary::select('professional_summaries.*')->join('job_titles','job_titles.id','professional_summaries.job_title_id')
                ->where('job_titles.name_ar','like','%'.$possible_keys['search_keys'].'%')
                ->orwhere('job_titles.name_en','like','%'.$possible_keys['search_keys'].'%')
                ->get();

        }else{
            $cvItem=self::getCVItem();
            $newest_work=CustomerCvWorkHistory::select('id','job_title_ar','job_title_en','job_title_id')
                ->where('customer_cv_id',$cvItem->id)->latest()->first();
            if(!empty($newest_work)){
                if(!empty($newest_work->job_title_id)){
                    $related_skills=ProfessionalSummary::where('job_title_id',$newest_work->job_title_id)->get();
                }else{
                    $related_skills=ProfessionalSummary::select('professional_summaries.*')->join('job_titles','job_titles.id','professional_summaries.job_title_id')
                        ->where('job_titles.name_ar','like','%'.$newest_work->job_title_ar.'%')
                        ->orwhere('job_titles.name_en','like','%'.$newest_work->job_title_en.'%')
                        ->get();
                }
            }
        }

        return $related_skills;
    }
    public static function addStoredCVinCart($customerCV){
        return CartService::AddToCart($customerCV);
    }
    public static function addStoredCVinCartByName($customerCV,$cart_name){
        return CartService::AddToCartByName($customerCV,$cart_name);
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
            case 3:
                self::storeEducation($data);
                break;
            case 4:
                self::storeCourses($data);
                break;
            case 5:
                self::storeSkills($data);
                break;
            case 6:
                self::storeSummary($data);
                break;
            case 7:
                self::storeLanguages($data);
                break;
            case 8:
                if(isset($data['request_type']) && $data['request_type']!="customer.editCV"){
                    $cvItem=self::getCVItem();
                    if($cvItem->model->subscription_id==0){
                        return  redirect()->route('getCustomerPackagesPricing');
                    }
                    Subscription::where('id',$cvItem->model->subscription_id)->update(['current_cv_count'=>($cvItem->model->subscription->current_cv_count+1)]);
                }
                return redirect()->route('customer.dashboard');
        }
    }
    public static function storeLanguages($data){
        $data = self::getDataArraysFromRequest($data);
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)){
                $customer_cv->stopped_on_step=7;
                $customer_cv->save();
                //dd($data);
                foreach ($data as $language) {
                CustomerCvLanguage::create([
                    'customer_cv_id' => $cvItem->id,
                    'language_ar' => $language['language_ar'] ?? '',
                    'language_en' => $language['language_en'] ?? '',
                    'language_id' => $language['language_id'] ?? '',
                    'level_ar' => $language['level_ar'] ??  $language['level_en'],
                    'level_en' => $language['level_en'] ?? '',
                    'information_ar' => $language['information_ar'] ?? '',
                    'information_en' => $language['information_en'] ?? '',
                ]);
            }
            }
        }
        return true;
    }
    public static function deleteOldSummaries($cv){
        if(count($cv->customer_cv_summery)){
            $cv->customer_cv_summery()->delete();
        }
    }
    public static function updateSummaryContent($cv,$content){
        $cv->summary_content_en=$content;
        $cv->summary_content_ar=$content;
        $cv->save();
    }
    public static function storeSummary($data)
    {
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)){
                $customer_cv->stopped_on_step=6;
                $customer_cv->save();
                self::updateSummaryContent($customer_cv,$data['summary_content'] ?? '');
                self::deleteOldSummaries($customer_cv);
                if(isset($data['summaries_ids'])){
                    foreach ($data['summaries_ids'] as $summary) {
                        if($summary!=null){
                            $selected_summary=ProfessionalSummary::find($summary);
                            if(!empty($selected_summary)){
                                CustomerCvSummery::create([
                                    'customer_cv_id' => $cvItem->id,
                                    'content_ar' => $selected_summary->content_ar ?? '',
                                    'content_en' => $selected_summary->content_en ?? '',
                                    'summary_id' => $selected_summary->id ?? '',
                                ]);
                            }
                        }
                    }
                }
            }
        }
        return true;
    }
    public static function deleteOldSkills($cv){
        if(count($cv->customer_cv_skill)){
            $cv->customer_cv_skill()->delete();
        }
    }
    public static function updateSkillsContent($cv,$content){
        $cv->skills_content_en=$content;
        $cv->skills_content_ar=$content;
        $cv->save();
    }
    public static function storeSkills($data)
    {
        $cvItem = self::getCVItem();
        if (!empty($cvItem)) {
            $customer_cv=CustomerCv::find($cvItem->id);
            if(!empty($customer_cv)){
                $customer_cv->stopped_on_step=5;
                $customer_cv->save();
                self::updateSkillsContent($customer_cv,$data['skills_content'] ?? '');
                self::deleteOldSkills($customer_cv);
                if(isset($data['skills_ids'])){
                    foreach ($data['skills_ids'] as $skill) {
                        if($skill!=null){
                            $selected_skill=Skill::find($skill);
                           if(!empty($selected_skill)){
                               CustomerCvSkill::create([
                                   'customer_cv_id' => $cvItem->id,
                                   'content_ar' => $selected_skill->name_ar ?? '',
                                   'content_en' => $selected_skill->name_en ?? '',
                                   'skill_id' => $selected_skill->id ?? '',
                               ]);
                           }
                        }
                    }
                }
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
                $customer_cv->stopped_on_step=4;
                $customer_cv->save();
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
                $customer_cv->stopped_on_step=3;
                $customer_cv->save();
                $current=0;
                self::deleteOldCEducations($customer_cv);
                foreach ($data as $education) {
                    if(isset($education['current']))$current=1;
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
                        'start_date' => $education['start_date'] ?? null,
                        'end_date' => $education['end_date'] ?? null,
                        'current'=>$current
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
                $customer_cv->stopped_on_step=2;
                $customer_cv->save();
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
            $customer_cv->stopped_on_step=1;
            $customer_cv->save();
            self::deleteOldCVWorkHistory($customer_cv);
            $current=0;
            foreach ($data as $work) {
                if(isset($work['current']))$current=1;
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
                    'current' => $current,
                    'experience_description_ar' => $work['experience_description_ar'] ?? '',
                    'experience_description_en' => $work['experience_description_en'] ?? ''
                ]);
            }
        }
        return true;
    }
    public static function updatePersonalInformation($id,$data){
        $subscription_id=0;
        if(Auth::guard('customer')->check() && Auth::guard('customer')->user()->getActiveSubscription()!=null){
            $subscription_id= Auth::guard('customer')->user()->getActiveSubscription()->id;
        }
      return CustomerCv::where('id',$id)->update([
            'template_id' => session('chosen_template_id'),
            'template_color' => session('chosen_cv_color'),
            'cv_language' => session('chosen_cv_language'),
            'customer_id' => Auth::guard('customer')->user()->id ?? 0,
            'subscription_id'=>$subscription_id,
            'first_name' => $data['first_name'],
            'first_name_ar' => $data['first_name_ar'] ?? '',
            'surename' => $data['surename'],
            'surename_ar' => $data['surename_ar'] ?? '',
            'phone' => $data['phone'],
            'email' => $data['email'] ?? '',
            'image' => $data['image_file'] ?? '',
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
        $subscription_id=0;
        if (Auth::guard('customer')->check()) {
            $customer_id = Auth::guard('customer')->user()->id;
            $active_subscription=Auth::guard('customer')->user()->getActiveSubscription();
            if($active_subscription!=null){
                if($active_subscription->current_cv_count < $active_subscription->max_cv_limit)
                $subscription_id= $active_subscription->id;
            }
        }
        if (self::checkChosenCVSetting()) {
            $customerCV = CustomerCv::create([
                'template_id' => session('chosen_template_id'),
                'template_color' => session('chosen_cv_color'),
                'cv_language' => session('chosen_cv_language'),
                'customer_id' => $customer_id,
                'subscription_id'=>$subscription_id,
                'first_name' => $data['first_name'],
                'first_name_ar' => $data['first_name_ar'] ?? '',
                'surename' => $data['surename'],
                'surename_ar' => $data['surename_ar'] ?? '',
                'phone' => $data['phone'],
                'email' => $data['email'] ?? '',
                'image' => $data['image_file'] ?? '',
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
                'stopped_on_step'=>0
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
    public static function getCVItemByCartName($cart_name){
        $cart = Cart::name($cart_name);
        return $cart->getDetails()->get('items')->first();
    }
    public static function getDataArraysFromRequest($data)
    {
        unset($data['_token']);
        unset($data['step']);
        return $data;
    }
    public static function deleteAllRelatedDataToCV($cv){
        try{
            if(count($cv->customer_cv_work_history))
            $cv->customer_cv_work_history()->delete();
            if(count($cv->customer_cv_project))
            $cv->customer_cv_project()->delete();
            if(count($cv->customer_cv_education))
            $cv->customer_cv_education()->delete();
            if(count($cv->customer_cv_course))
            $cv->customer_cv_course()->delete();
            if(count($cv->customer_cv_skill))
            $cv->customer_cv_skill()->delete();
            if(count($cv->customer_cv_summery))
            $cv->customer_cv_summery()->delete();
            if(count($cv->customer_cv_language))
            $cv->customer_cv_language()->delete();
            return true;
        }catch (\Exception $exception){
//            return $exception->getMessage();
            return false;
        }
    }
}
