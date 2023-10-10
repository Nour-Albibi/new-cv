<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\CustomerCVs;
use App\Admin\Actions\CustomerSubscriptions;
use App\Models\Customer;
use App\Models\Package;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Customer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Customer());

        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('email', __('Email'));
        $grid->column('contact_phone', __('Contact phone'));
        $grid->column('avatar', __('Avatar'))->image();
        $grid->column('username', __('Username'));
        $grid->column('signed_up_with', __('Signed up with'))->display(function(){
            if($this->signed_up_with==1){
                return "From Website";
            }elseif($this->signed_up_with==2){
                return "From Facebook";
            }else{
                return "From Gmail";
            }
        });
        $grid->column('created_at', __('Created at'))->display(function (){
            return date_create($this->created_at)->format('Y-m-d H:i:s');
        });
        $grid->model()->where('customer_type', 1);
        if(request()->has('user_id')){
            $grid->model()->where('id',request('user_id'));
        }
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->where(function ($query) {
                $query->where('first_name', 'like', "%{$this->input}%");
            }, 'First Name');
            $filter->where(function ($query) {
                $query->where('last_name', 'like', "%{$this->input}%");
            }, 'Last Name');
            $filter->scope('trashed', 'Recycle Bin')->onlyTrashed();
        });
        $grid->actions(function ($actions) {
            $actions->add(new CustomerSubscriptions($actions->getKey()));
            $actions->add(new CustomerCVs($actions->getKey()));
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
        $show = new Show(Customer::findOrFail($id));

        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email', __('Email'));
        $show->field('contact_phone', __('Contact phone'));
        $show->field('address', __('Address'));
        $show->field('avatar', __('Avatar'))->image();
        $show->field('username', __('Username'));
        $show->field('remember_token', __('Remember token'));
        $show->field('signed_up_with', __('Signed up with'));
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
        $form = new Form(new Customer());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->email('email', __('Email'));
        $form->text('contact_phone', __('Contact phone'));
        $form->text('address', __('Address'));
        $form->image('avatar', __('Avatar'));
        $form->text('username', __('Username'));
        $form->password('password', __('Password'));
        $form->hidden('customer_type')->default(1);
        $form->hidden('signed_up_with')->default(1);
        $form->divider('Company Subscription');
        $form->hasMany('subscription', function (Form\NestedForm $form) {
            $form->hidden('id');
            $form->select('package_id', __('Package'))
                ->options(Package::select('name_en','id')->where('type',1)->get()->pluck('name_en', 'id'))
                ->rules('required');
            $form->hidden('package_type')->default(1);
            $form->datetime('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
            $form->datetime('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
            $states = [
                'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
                'off' => ['value' => 0, 'text' => __('Disable'), 'color' => 'danger'],
            ];
            $form->switch('status', __('Status'))->states($states)->default(1);
        });
        return $form;
    }
}
