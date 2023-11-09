<?php

namespace App\Admin\Controllers;

use App\Models\SiteSetting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SiteSettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Website General Settings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SiteSetting());

        $grid->column('name_en', __('My Company Name'));
        $grid->column('logo', __('Logo'));
        $grid->column('site_title_en', __('Site English main title '));
        $grid->column('slogan_en', __('English Slogan'));
        $grid->column('company_email', __('Main Email'));
        $grid->column('company_phone1', __('My Company phone1'));
        $grid->column('comapny_phone2', __('My Company phone2'));
        $grid->column('address_en', __('Address'));
        $grid->column('facebook_link', __('Facebook link'));
        $grid->column('twitter_link', __('Twitter link'));
        $grid->column('linkedin_link', __('Linkedin link'));
//        $grid->disableCreateButton();
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
        $show = new Show(SiteSetting::findOrFail($id));

        $show->field('name_ar', __('Arabic Name'));
        $show->field('name_en', __('English Name'));
        $show->field('logo', __('Logo'))->image();
        $show->field('site_title_en', __('English Site title'));
        $show->field('site_title_ar', __('Arabic Site title'));
        $show->field('slogan_ar', __('Arabic Slogan'));
        $show->field('slogan_en', __('English Slogan'));
        $show->field('company_email', __('Company email'));
        $show->field('company_phone1', __('Company phone1'));
        $show->field('comapny_phone2', __('Comapny phone2'));
        $show->field('address_ar', __('Arabic Address'));
        $show->field('address_en', __('English Address'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('twitter_link', __('Twitter link'));
        $show->field('linkedin_link', __('Linkedin link'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SiteSetting());

        $form->text('name_ar', __('My Company Arabic Name'));
        $form->text('name_en', __('My Company Name'));
        $form->image('logo', __('Logo'));
        $form->text('site_title_en', __('Site Main English Title'))->help('SEO Title');
        $form->text('site_title_ar', __('Site Main Arabic Title'))->help('SEO Title');
        $form->textarea('slogan_ar', __('Arabic Slogan'));
        $form->textarea('slogan_en', __('English Slogan'));
        $form->email('company_email', __('Company email'));
        $form->mobile('company_phone1', __('Company phone1'))->options(['mask' => '999 9999 9999']);
        $form->mobile('comapny_phone2', __('Comapny phone2'))->options(['mask' => '999 9999 9999']);
        $form->text('address_ar', __('Arabic Address'));
        $form->text('address_en', __('English Address'));
        $form->url('facebook_link', __('Facebook link'));
        $form->url('twitter_link', __('Twitter link'));
        $form->url('linkedin_link', __('Linkedin link'));
        $form->url('map_link', __('Map link'));
        return $form;
    }
}
