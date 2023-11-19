<?php

namespace App\Admin\Controllers;

use App\Models\Package;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PackageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Package';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Package());

        $grid->column('name_en', __('English Name'));
        $grid->column('name_ar', __('Arabic Name'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('duration', __('Duration'));
        $grid->column('cv_price', __('CV price'));
        $grid->column('total_price', __('Total price'));

        $grid->column('type', __('Type'))->display(function(){
            if($this->type==1){return "Customer Package";}
            else return "Company Package";
        });
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disabled'), 'color' => 'danger'],
        ];
        $grid->column('is_active', __('Status'))->switch($states);
        $grid->column('created_at', __('Created at'))->display(function (){
            return date_create($this->created_at)->format('Y-m-d H:i:s');
        });

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
        $show = new Show(Package::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name_en', __('Name en'));
        $show->field('name_ar', __('Name ar'));
        $show->field('description_en', __('Description en'));
        $show->field('description_ar', __('Description ar'));
        $show->field('quantity', __('Quantity'));
        $show->field('duration', __('Duration'));
        $show->field('cv_price', __('Cv price'));
        $show->field('total_price', __('Total price'));
        $show->field('type', __('Type'));
        $show->field('is_active', __('Is active'));
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
        $form = new Form(new Package());
        $form->hidden('id');
        $form->text('name_en', __('Package English Name'));
        $form->text('name_ar', __('Package Arabic Name'));
        $form->textarea('description_en', __('English Description'));
        $form->textarea('description_ar', __('Arabic Description'));
        $form->number('quantity', __('Quantity'))->help(__('CV Allowed Count'))->min(1);
        $form->number('duration', __('Duration'))->min(1)->help(__('Duration in Months'));
        $form->decimal('cv_price', __('CV price'))->rules('min:0');
        $form->hidden('total_price');
        $form->radio('type', __('Package Type'))->options([1 => __('Normal Customer Package'), 2 => __('Company Package')])->default(1);
        $form->hasMany('features', __('Package features'), function (Form\NestedForm $form) {
            $form->hidden('id');
            $form->text('title_ar',__('Arabic Title'));
            $form->text('title_en',__('English Title'));
        });
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disable'), 'color' => 'danger'],
        ];
        $form->switch('is_active', __('Status'))->states($states)->default(1);
        $form->saving(function (Form $form) {
             $form->total_price=$form->cv_price*$form->quantity;
        });
        return $form;
    }
}
