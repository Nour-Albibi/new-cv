<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\DownloadCV;
use App\Admin\Extensions\Tools\AddCustomerCV;
use App\Models\Customer;
use App\Models\CustomerCv;
use App\Models\EducationLevel;
use App\Models\JobTitle;
use App\Models\Template;
use Barryvdh\DomPDF\Facade\Pdf;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCv';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCv());

        $grid->template()->name_en();
        $grid->column('cv_language',__('CV Language'))->display(function(){
           if($this->cv_language==1){ return "English";}
           elseif($this->cv_language==2){return "Arabic";}
           else {return "Both";}
        });
        $grid->column('customer_id', __('Customer'))->display(function () {
            if(!empty($this->customer)){
                return '<a href="' . url('admin/customers?user_id=' . $this->id) . '">' . $this->customer->username ?? '' . '</a>';
            }
        });
        $grid->column('first_name', __('First name'));
        $grid->column('surename', __('Sure name'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('image', __('Image'))->display(function () {
            return '<img src="' . asset('files/uploads/' . $this->image) . '" style="width:200px;"/>';
        });
        $grid->column('created_at', __('Created at'))->display(function (){
            return date_create($this->created_at)->format('Y-m-d H:i:s');
        });
        if(request()->has('user_id')){
            $grid->model()->where('customer_id',request('user_id'));
            $grid->disableCreateButton();
            $grid->tools(function ($tools) {
                $tools->append(new AddCustomerCV());
            });
        }

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $cv=CustomerCv::findorFail($id);
        $cvFileName=$cv->template->file_name;
        $lang=$cv->cv_language;
        return view('cv-templates.'.$cvFileName,['cv' => $cv,'lang'=>$lang]);
//        $show = new Show(CustomerCv::findOrFail($id));
//
//        $show->field('id', __('Id'));
//        $show->field('template_id', __('Template id'));
//        $show->field('template_color', __('Template color'));
//        $show->field('customer_id', __('Customer id'));
//        $show->field('first_name', __('First name'));
//        $show->field('surename', __('Surename'));
//        $show->field('first_name_ar', __('First name ar'));
//        $show->field('surename_ar', __('Surename ar'));
//        $show->field('phone', __('Phone'));
//        $show->field('email', __('Email'));
//        $show->field('image', __('Image'));
//        $show->field('open_for_remote', __('Open for remote'));
//        $show->field('linkedlin_url', __('Linkedlin url'));
//        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));
//
//        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CustomerCv());
        $form->tab(__('CV Personal Information'), function ($form) {
            $form->select('template_id', __('CV Template'))->options(Template::all()->pluck('name_en', 'id'));
            $form->color('template_color', __('Template color'));
            $form->select('cv_language',__('CV Language'))->options([1=>'English',2=>'Arabic',3=>'Both'])->default(1);
            if(!empty(request('user_id'))){
                $customer=Customer::select('first_name','last_name','id')->
                where('id',request('user_id'))->first();
                $form->html('<p>Customer: '.$customer->first_name.' '.$customer->last_name.' </p>');
                $form->hidden('customer_id')->default($customer->id);
            }else{
                $form->select('customer_id', __('Customer'))->options(Customer::select('username', 'id')->where('customer_type', 1)->get()->pluck('username', 'id'));
            }
            $form->text('first_name', __('First name'));
            $form->text('surename', __('Surename'));
            $form->text('first_name_ar', __('Arabic First Name'));
            $form->text('surename_ar', __('Arabic Sure name'));
            $form->mobile('phone', __('Phone'));
            $form->email('email', __('Email'));
            $form->image('image', __('Image'));
            $form->radio('open_for_remote', __('Open for remote'))->options([
                0 => __('Disabled'),
                1 => __('Enabled'),
            ])->default(1);
            $form->url('linkedlin_url', __('Linkedin url'));
        })->tab(__('work History'), function ($form) {
            $form->hasMany('customer_cv_work_history', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->text('job_title_ar', __('Arabic Job title'));
                $form->textarea('job_title_en', __('English Job title'));
                $form->select('job_title_id', __('Job title'))->options(JobTitle::select('name_en', 'id')->get()->pluck('name_en', 'id'));
                $form->text('employeer_ar', __('Employeer in Arabic'));
                $form->text('employeer_en', __('Employeer in English'));
                $form->text('city_ar', __('City in Arabic'));
                $form->text('city_en', __('City in English'));
//            $form->number('city_id', __('City id'));
                $form->text('country_ar', __('Country in Arabic'));
                $form->text('country_en', __('Country in English'));
                $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
                $form->date('end_date', __('End date'))->default(date('Y-m-d'));
                $form->radio('current', __('Current'))
                    ->options([1 => __('Yes'), 0 => __('No')])->default(0);
                $form->textarea('experience_description_ar', __('Arabic Experience description'));
                $form->textarea('experience_description_en', __('English Experience description'));
            });
        })->tab(__('Projects'), function ($form) {
            $form->hasMany('customer_cv_project', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->text('project_name_en', __('English Project name'));
                $form->text('project_name_ar', __('Arabic Project name'));
                $form->textarea('description_en', __('English Description'));
                $form->textarea('description_ar', __('Arabic Description'));
                $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
                $form->date('end_date', __('End date'))->default(date('Y-m-d'));
            });
        })->tab(__('Educations'), function ($form) {
            $form->hasMany('customer_cv_education', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->text('institution_name_en', __('Institution English name'));
                $form->text('institution_name_ar', __('Institution Arabic name'));
                $form->text('city_ar', __('City in Arabic Language'));
                $form->text('city_en', __('City in English Language'));
                $form->select('qualification_id', __('Qualification'))->options(EducationLevel::select('name_en','id')->get()->pluck('name_en','id'));
                $form->text('field_study_ar', __('Field study in Arabic'));
                $form->text('field_study_en', __('Field study in English'));
                $form->text('honours_ar', __('Honours in Arabic'));
                $form->text('honours_en', __('Honours in English'));
                $form->number('start_month', __('Start month'))->default(1)->min(1)->max(12);
                $form->date('start_year', __('Start year'))->default(date('Y-m-d'));
                $form->number('end_month', __('End month'))->default(12)->min(1)->max(12);
                $form->date('end_year', __('End year'))->default(date('Y-m-d'));
            });
        })->tab(__('Courses'), function ($form) {
            $form->hasMany('customer_cv_course', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->text('course_name_ar', __('Arabic Course name'));
                $form->text('course_name_en', __('English Course name'));
                $form->text('trainer_ar', __('Arabic Trainer'));
                $form->text('trainer_en', __('English Trainer'));
                $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
                $form->date('end_date', __('End date'))->default(date('Y-m-d'));
            });
        })->tab(__('Skills'), function ($form) {
            $form->hasMany('customer_cv_skill', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->textarea('content_ar', __('Content ar'));
                $form->textarea('content_en', __('Content en'));
//                $form->number('skill_id', __('Skill id'));
            });
        })->tab(__('Proffesional Summary'), function ($form) {
            $form->hasMany('customer_cv_summery', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->textarea('content_ar', __('Content ar'));
                $form->textarea('content_en', __('Content en'));
            });
        })->tab(__('Languages'), function ($form) {
            $form->hasMany('customer_cv_language', function (Form\NestedForm $form) {
                $form->hidden('id');
                $form->text('language_ar', __('Language ar'));
                $form->text('language_en', __('Language en'));
//                $form->number('language_id', __('Language id'));
                $form->text('level_ar', __('Level ar'));
//                $form->number('level_en', __('Level en'));
                $form->text('information_ar', __('Information ar'));
                $form->text('information_en', __('Information en'));
            });
        });
        return $form;
    }
    public function PreviewCVinPage(CustomerCv $cv){
        $cvFileName=$cv->template->file_name;
        $lang=$cv->cv_language;
        return view('cv-templates.'.$cvFileName,['cv' => $cv,'lang'=>$lang]);
    }
}
