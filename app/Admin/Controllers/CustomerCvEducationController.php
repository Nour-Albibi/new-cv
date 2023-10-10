<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvEducation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvEducationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvEducation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvEducation());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('institution_name_en', __('Institution name en'));
        $grid->column('institution_name_ar', __('Institution name ar'));
        $grid->column('city_ar', __('City ar'));
        $grid->column('city_en', __('City en'));
        $grid->column('qualification_id', __('Qualification id'));
        $grid->column('field_study_ar', __('Field study ar'));
        $grid->column('field_study_en', __('Field study en'));
        $grid->column('honours_ar', __('Honours ar'));
        $grid->column('honours_en', __('Honours en'));
        $grid->column('start_month', __('Start month'));
        $grid->column('start_year', __('Start year'));
        $grid->column('end_month', __('End month'));
        $grid->column('end_year', __('End year'));
        $grid->column('current', __('Current'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(CustomerCvEducation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('institution_name_en', __('Institution name en'));
        $show->field('institution_name_ar', __('Institution name ar'));
        $show->field('city_ar', __('City ar'));
        $show->field('city_en', __('City en'));
        $show->field('qualification_id', __('Qualification id'));
        $show->field('field_study_ar', __('Field study ar'));
        $show->field('field_study_en', __('Field study en'));
        $show->field('honours_ar', __('Honours ar'));
        $show->field('honours_en', __('Honours en'));
        $show->field('start_month', __('Start month'));
        $show->field('start_year', __('Start year'));
        $show->field('end_month', __('End month'));
        $show->field('end_year', __('End year'));
        $show->field('current', __('Current'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CustomerCvEducation());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->text('institution_name_en', __('Institution name en'));
        $form->text('institution_name_ar', __('Institution name ar'));
        $form->text('city_ar', __('City ar'));
        $form->text('city_en', __('City en'));
        $form->number('qualification_id', __('Qualification id'));
        $form->number('field_study_ar', __('Field study ar'));
        $form->text('field_study_en', __('Field study en'));
        $form->text('honours_ar', __('Honours ar'));
        $form->text('honours_en', __('Honours en'));
        $form->number('start_month', __('Start month'))->default(1);
        $form->date('start_year', __('Start year'))->default(date('Y-m-d'));
        $form->number('end_month', __('End month'))->default(12);
        $form->date('end_year', __('End year'))->default(date('Y-m-d'));
        $form->number('current', __('Current'));

        return $form;
    }
}
