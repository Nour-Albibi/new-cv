<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvLanguage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvLanguageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvLanguage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvLanguage());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('language_ar', __('Language ar'));
        $grid->column('language_en', __('Language en'));
        $grid->column('language_id', __('Language id'));
        $grid->column('level_ar', __('Level ar'));
        $grid->column('level_en', __('Level en'));
        $grid->column('information_ar', __('Information ar'));
        $grid->column('information_en', __('Information en'));
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
        $show = new Show(CustomerCvLanguage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('language_ar', __('Language ar'));
        $show->field('language_en', __('Language en'));
        $show->field('language_id', __('Language id'));
        $show->field('level_ar', __('Level ar'));
        $show->field('level_en', __('Level en'));
        $show->field('information_ar', __('Information ar'));
        $show->field('information_en', __('Information en'));
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
        $form = new Form(new CustomerCvLanguage());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->text('language_ar', __('Language ar'));
        $form->text('language_en', __('Language en'));
        $form->number('language_id', __('Language id'));
        $form->text('level_ar', __('Level ar'));
        $form->number('level_en', __('Level en'));
        $form->text('information_ar', __('Information ar'));
        $form->text('information_en', __('Information en'));

        return $form;
    }
}
