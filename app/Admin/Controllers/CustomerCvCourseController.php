<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvCourse;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvCourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvCourse';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvCourse());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('course_name_ar', __('Course name ar'));
        $grid->column('course_name_en', __('Course name en'));
        $grid->column('trainer_ar', __('Trainer ar'));
        $grid->column('trainer_en', __('Trainer en'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
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
        $show = new Show(CustomerCvCourse::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('course_name_ar', __('Course name ar'));
        $show->field('course_name_en', __('Course name en'));
        $show->field('trainer_ar', __('Trainer ar'));
        $show->field('trainer_en', __('Trainer en'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
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
        $form = new Form(new CustomerCvCourse());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->text('course_name_ar', __('Course name ar'));
        $form->text('course_name_en', __('Course name en'));
        $form->text('trainer_ar', __('Trainer ar'));
        $form->text('trainer_en', __('Trainer en'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('end_date', __('End date'))->default(date('Y-m-d'));

        return $form;
    }
}
