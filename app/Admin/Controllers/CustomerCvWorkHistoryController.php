<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvWorkHistory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvWorkHistoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvWorkHistory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvWorkHistory());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('job_title_ar', __('Job title ar'));
        $grid->column('job_title_en', __('Job title en'));
        $grid->column('job_title_id', __('Job title id'));
        $grid->column('employeer_ar', __('Employeer ar'));
        $grid->column('employeer_en', __('Employeer en'));
        $grid->column('city_ar', __('City ar'));
        $grid->column('city_en', __('City en'));
        $grid->column('city_id', __('City id'));
        $grid->column('country_ar', __('Country ar'));
        $grid->column('country_en', __('Country en'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $grid->column('current', __('Current'));
        $grid->column('experience_description_ar', __('Experience description ar'));
        $grid->column('experience_description_en', __('Experience description en'));
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
        $show = new Show(CustomerCvWorkHistory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('job_title_ar', __('Job title ar'));
        $show->field('job_title_en', __('Job title en'));
        $show->field('job_title_id', __('Job title id'));
        $show->field('employeer_ar', __('Employeer ar'));
        $show->field('employeer_en', __('Employeer en'));
        $show->field('city_ar', __('City ar'));
        $show->field('city_en', __('City en'));
        $show->field('city_id', __('City id'));
        $show->field('country_ar', __('Country ar'));
        $show->field('country_en', __('Country en'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
        $show->field('current', __('Current'));
        $show->field('experience_description_ar', __('Experience description ar'));
        $show->field('experience_description_en', __('Experience description en'));
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
        $form = new Form(new CustomerCvWorkHistory());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->text('job_title_ar', __('Job title ar'));
        $form->textarea('job_title_en', __('Job title en'));
        $form->number('job_title_id', __('Job title id'));
        $form->text('employeer_ar', __('Employeer ar'));
        $form->text('employeer_en', __('Employeer en'));
        $form->text('city_ar', __('City ar'));
        $form->text('city_en', __('City en'));
        $form->number('city_id', __('City id'));
        $form->text('country_ar', __('Country ar'));
        $form->text('country_en', __('Country en'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('end_date', __('End date'))->default(date('Y-m-d'));
        $form->number('current', __('Current'));
        $form->textarea('experience_description_ar', __('Experience description ar'));
        $form->textarea('experience_description_en', __('Experience description en'));

        return $form;
    }
}
