<?php

namespace App\Admin\Controllers;

use App\Models\CustomerCvSummery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerCvSummeryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomerCvSummery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomerCvSummery());

        $grid->column('id', __('Id'));
        $grid->column('customer_cv_id', __('Customer cv id'));
        $grid->column('content_ar', __('Content ar'));
        $grid->column('content_en', __('Content en'));
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
        $show = new Show(CustomerCvSummery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('customer_cv_id', __('Customer cv id'));
        $show->field('content_ar', __('Content ar'));
        $show->field('content_en', __('Content en'));
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
        $form = new Form(new CustomerCvSummery());

        $form->number('customer_cv_id', __('Customer cv id'));
        $form->textarea('content_ar', __('Content ar'));
        $form->textarea('content_en', __('Content en'));

        return $form;
    }
}
