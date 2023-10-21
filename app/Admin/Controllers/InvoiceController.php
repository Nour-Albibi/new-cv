<?php

namespace App\Admin\Controllers;

use App\Models\Invoice;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InvoiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Invoice';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Invoice());

        $grid->column('invoice_no', __('Invoice no'));
        $grid->column('subscription_id', __('Subscription id'));
        $grid->column('customer_id',__('Customer name'))->display(function (){
            $name=$this->customer->first_name.' '.$this->customer->last_name;
            return $name;
        });
        // $grid->column('customer.first_name'.' '.'customer.lastname');
        // $grid->column('customer_id', __('Customer id'));
        $grid->column('cutomer_type', __('Cutomer type'))->display(function (){
            return ($this->customer_type == 1) ? 'customer' : 'company';
            });
        // $grid->column('package_fee', __('Package fee'));
        // $grid->column('sub_total', __('Sub total'));
        $grid->column('discount_value', __('Discount value'));
        // $grid->column('discount_id', __('Discount id'));
        $grid->column('coupon_code', __('Coupon code'));
        $grid->column('total_amount', __('Total amount'));
        $grid->column('invoice_date', __('Invoice date'));
        $grid->column('status', __('Status'));
        // $grid->column('payment_gateway', __('Payment gateway'));
        $grid->column('payment_status', __('Payment status'));
        // $grid->column('created_at', __('Created at'));
        $grid->disableCreateButton();

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
        $show = new Show(Invoice::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('invoice_no', __('Invoice no'));
        $show->field('subscription_id', __('Subscription id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('cutomer_type', __('Cutomer type'));
        $show->field('package_fee', __('Package fee'));
        $show->field('sub_total', __('Sub total'));
        $show->field('discount_value', __('Discount value'));
        $show->field('discount_id', __('Discount id'));
        $show->field('coupon_code', __('Coupon code'));
        $show->field('total_amount', __('Total amount'));
        $show->field('invoice_date', __('Invoice date'));
        $show->field('status', __('Status'));
        $show->field('payment_gateway', __('Payment gateway'));
        $show->field('payment_status', __('Payment status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Invoice());

        $form->text('invoice_no', __('Invoice no'));
        $form->number('subscription_id', __('Subscription id'));
        $form->number('customer_id', __('Customer id'));
        $form->number('cutomer_type', __('Cutomer type'))->default(1);
        $form->decimal('package_fee', __('Package fee'));
        $form->decimal('sub_total', __('Sub total'));
        $form->decimal('discount_value', __('Discount value'));
        $form->number('discount_id', __('Discount id'));
        $form->text('coupon_code', __('Coupon code'));
        $form->decimal('total_amount', __('Total amount'));
        $form->date('invoice_date', __('Invoice date'))->default(date('Y-m-d'));
        $form->number('status', __('Status'));
        $form->text('payment_gateway', __('Payment gateway'));
        $form->text('payment_status', __('Payment status'));

        return $form;
    }
}
