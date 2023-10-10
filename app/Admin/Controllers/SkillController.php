<?php

namespace App\Admin\Controllers;

use App\Models\Skill;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkillController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Skill';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Skill());

        $grid->column('id', __('Id'));
        $grid->column('job_title_id', __('Job title id'));
        $grid->column('name_ar', __('Name ar'));
        $grid->column('name_en', __('Name en'));
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
        $show = new Show(Skill::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('job_title_id', __('Job title id'));
        $show->field('name_ar', __('Name ar'));
        $show->field('name_en', __('Name en'));
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
        $form = new Form(new Skill());

        $form->number('job_title_id', __('Job title id'));
        $form->text('name_ar', __('Name ar'));
        $form->text('name_en', __('Name en'));

        return $form;
    }
}
