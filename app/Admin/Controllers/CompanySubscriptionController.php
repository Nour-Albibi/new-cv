<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\Tools\AddCompanySubscription;
use App\Models\CompanySubscription;
use App\Models\Customer;
use App\Models\Package;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompanySubscriptionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CompanySubscription';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CompanySubscription());
        $grid->column('user_id',__('Company'))->display(function(){
            return '<a href="'.url('admin/companies?user_id='.$this->id).'">'.$this->user->company_name.'</a>';
        });
        $grid->package()->name_en();
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disabled'), 'color' => 'danger'],
        ];
        $grid->column('status', __('Status'))->switch($states);
        $grid->model()->where('package_type', '=', 2);
        if(request()->has('user_id')){
            $grid->model()->where('user_id',request('user_id'));
            $grid->disableCreateButton();
            $grid->tools(function ($tools) {
                $tools->append(new AddCompanySubscription());
            });
        }
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
        $show = new Show(CompanySubscription::findOrFail($id));

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
        $form = new Form(new CompanySubscription());
        if(!empty(request('user_id'))){
            $company=Customer::select('company_name','id')->
            where('id',request('user_id'))->first();
            $form->html('<p>Company: '.$company->company_name.' </p>');
            $form->hidden('user_id')->default($company->id);
        }else{
            $form->select('user_id', __('Company'))
                ->options(Customer::select('id','company_name')->where('customer_type',2)->get()->pluck('company_name', 'id'))
                ->rules('required');
        }
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
        return $form;
    }
}
