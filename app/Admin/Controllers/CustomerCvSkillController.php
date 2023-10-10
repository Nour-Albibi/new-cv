<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvSkill;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvSkillController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvSkill';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvSkill());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('content_ar', __('Content ar'));
        $grid->column('content_en', __('Content en'));
        $grid->column('skill_id', __('Skill id'));
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
        $show = new Show(CustomerCvSkill::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('content_ar', __('Content ar'));
        $show->field('content_en', __('Content en'));
        $show->field('skill_id', __('Skill id'));
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
        $form = new Form(new CustomerCvSkill());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->textarea('content_ar', __('Content ar'));
        $form->textarea('content_en', __('Content en'));
        $form->number('skill_id', __('Skill id'));

        return $form;
    }
}
