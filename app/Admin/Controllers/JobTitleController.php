<?php

namespace App\Admin\Controllers;

use App\Models\JobTitle;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JobTitleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JobTitle';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JobTitle());

        $grid->column('id', __('Id'));
        $grid->column('name_en', __('English Name'));
        $grid->column('name_ar', __('Arabic Name'));
        $grid->filter(function ($filter) {
            $filter->where(function ($query) {
                $query->where('name_ar', 'like', "%{$this->input}%");
            }, 'Arabic Name');
            $filter->where(function ($query) {
                $query->where('name_en', 'like', "%{$this->input}%");
            }, 'English  Name');
        });
        $grid->expandFilter();
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
        $show = new Show(JobTitle::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_en', __('Name en'));
        $show->field('name_ar', __('Name ar'));
        $show->field('code', __('Code'));
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
        $form = new Form(new JobTitle());

        $form->text('name_en', __('English Name'));
        $form->text('name_ar', __('Arabic Name'));
//        $form->text('code', __('Code'));
        $form->hasMany('skills', function (Form\NestedForm $form) {
            $form->hidden('id');
            $form->text('name_ar',__('Arabic Name'));
            $form->text('name_en',__('English Name'));
        });
        return $form;
    }
}
