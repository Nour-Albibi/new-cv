<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Subscriptions;
use App\Models\Company;
use App\Models\Package;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Company';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Company());

        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('email', __('Email'));
        $grid->column('contact_phone', __('Contact phone'));
        $grid->column('address', __('Address'));
        $grid->column('company_name', __('Company name'));
        $grid->column('avatar', __('Avatar'))->image();
        $grid->column('username', __('Username'));
        $grid->model()->where('customer_type', 2);
        if(request()->has('user_id')){
            $grid->model()->where('id',request('user_id'));
        }
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->where(function ($query) {
                $query->where('company_name', 'like', "%{$this->input}%");
            }, 'Company Name');
            $filter->scope('trashed', 'Recycle Bin')->onlyTrashed();
        });
        $grid->actions(function ($actions) {
            $actions->add(new Subscriptions($actions->getKey()));
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
        $show = new Show(Company::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email', __('Email'));
        $show->field('contact_phone', __('Contact phone'));
        $show->field('address', __('Address'));
        $show->field('company_name', __('Company name'));
        $show->field('avatar', __('Avatar'));
        $show->field('username', __('Username'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('signed_up_with', __('Signed up with'));
        $show->field('customer_type', __('Customer type'));
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
        $form = new Form(new Company());
        $form->hidden('id');
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));

        $form->email('email', __('Email'))->rules('required');
        $form->mobile('contact_phone', __('Contact phone'))->rules('required');
        $form->text('address', __('Address'));
        $form->text('company_name', __('Company name'))->rules('required');
        $form->image('avatar', __('Avatar'));
        $form->text('username', __('Username'))->rules('required');
        $form->password('password', __('Password'))->rules('required');
        $form->hidden('customer_type')->default(2);
        $form->divider('Company Subscription');
        $form->hasMany('subscription', function (Form\NestedForm $form) {
            $form->hidden('id');
            $form->select('package_id', __('Package'))
                ->options(Package::select('name_en','id')->where('type',2)->get()->pluck('name_en', 'id'))
                ->rules('required');
            $form->hidden('package_type')->default(2);
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
