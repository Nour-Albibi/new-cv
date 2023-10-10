<?php

namespace App\Admin\Controllers;

use App\Models\CompanyPackage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompanyPackageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CompanyPackage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CompanyPackage());

        $grid->column('name_en', __('English Name'));
        $grid->column('name_ar', __('Arabic Name'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('duration', __('Duration'));
        $grid->column('cv_price', __('Cv price'));
        $grid->column('total_price', __('Total price'));
        $states = [
            'on'  => ['value' => 1, 'text' => __('Active'), 'color' => 'success'],
            'off' => ['value' => 0, 'text' => __('Disabled'), 'color' => 'danger'],
        ];
        $grid->column('is_active', __('Status'))->switch($states);
        $grid->column('created_at', __('Created at'))->display(function (){
            return date_create($this->created_at)->format('Y-m-d H:i:s');
        });
        $grid->model()->where('type', '=', 2);
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
        $show = new Show(CompanyPackage::findOrFail($id));

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
        $form = new Form(new CompanyPackage());

        $form->hidden('id');
        $form->text('name_en', __('Package English Name'));
        $form->text('name_ar', __('Package Arabic Name'));
        $form->text('description_en', __('English Description'));
        $form->text('description_ar', __('Arabic Description'));
        $form->number('quantity', __('Quantity'))->help(__('CV Allowed Count'))->min(1);
        $form->number('duration', __('Duration'))->min(1)->help(__('Duration in Months'));
        $form->decimal('cv_price', __('CV price'))->rules('min:0');
        $form->hidden('total_price');
        $form->hidden('type')->default(2);
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
