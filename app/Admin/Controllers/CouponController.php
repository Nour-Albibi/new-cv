<?php

namespace App\Admin\Controllers;

use App\Models\Coupon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CouponController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Coupon';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coupon());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code'));
        $grid->column('package_id', __('Package id'))->display(function(){
            return $this->package->name_en;
        });
        $grid->column('discount_amount', __('Discount amount'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));

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
        $show = new Show(Coupon::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('code', __('Code'));
        $show->field('package_id', __('Package id'));
        $show->field('discount_amount', __('Discount amount'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Coupon());

        $form->textarea('code', __('Code'));
        $form->number('package_id', __('Package id'));
        $form->decimal('discount_amount', __('Discount amount'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('end_date', __('End date'))->default(date('Y-m-d'));

        return $form;
    }
}
