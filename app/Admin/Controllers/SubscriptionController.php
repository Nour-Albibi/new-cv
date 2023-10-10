<?php

namespace App\Admin\Controllers;

use App\Models\Customer;
use App\Models\Package;
use App\Models\Subscription;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SubscriptionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Subscription';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Subscription());

        $grid->column('user_id', __('User'))->display(function (){
            if($this->user->customer_type==2)
                return  $this->user->company_name;
            else
            return   $this->user->first_name.' '.$this->user->last_name;
        });
        $grid->package()->name_en();
        $grid->column('package_type', __('Package type'))->display(function(){
            if($this->package->type==1) return "Customer Package";
            else return "Company Package";
        });

        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disabled'), 'color' => 'danger'],
        ];
        $grid->column('status', __('Status'))->switch($states);
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
        $show = new Show(Subscription::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('package_id', __('Package id'));
        $show->field('package_type', __('Package type'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Subscription());
        $form->select('user_id', __('Customer'))
            ->options(Customer::all()->pluck('first_name', 'id'))
            ->rules('required');
        $form->select('package_id', __('Package'))
            ->options(Package::all()->pluck('name_en', 'id'))
            ->rules('required');
        $form->hidden('package_type');
        $form->datetime('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disable'), 'color' => 'danger'],
        ];
        $form->switch('status', __('Status'))->states($states)->default(1);
        $form->saving(function (Form $form) {
            $form->total_price=$form->cv_price*$form->quantity;
            $package_type=Package::find($form->package_id)->type;
            $form->package_type=$package_type;
        });
        return $form;
    }
}
