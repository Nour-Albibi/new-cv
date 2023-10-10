<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvProject;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvProject';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvProject());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('project_name_en', __('Project name en'));
        $grid->column('project_name_ar', __('Project name ar'));
        $grid->column('description_en', __('Description en'));
        $grid->column('description_ar', __('Description ar'));
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
        $show = new Show(CustomerCvProject::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('project_name_en', __('Project name en'));
        $show->field('project_name_ar', __('Project name ar'));
        $show->field('description_en', __('Description en'));
        $show->field('description_ar', __('Description ar'));
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
        $form = new Form(new CustomerCvProject());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->text('project_name_en', __('Project name en'));
        $form->text('project_name_ar', __('Project name ar'));
        $form->textarea('description_en', __('Description en'));
        $form->textarea('description_ar', __('Description ar'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('end_date', __('End date'))->default(date('Y-m-d'));

        return $form;
    }
}
