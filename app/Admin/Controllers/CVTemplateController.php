<?php

namespace App\Admin\Controllers;

use App\Models\Template;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CVTemplateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CV Templates';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Template());

        $grid->column('name_en', __('English Name'));
        $grid->column('name_ar', __('Arabic Name'));
        $grid->column('image', __('Image'))->display(function(){
            return '<img src="'.asset('files/'.$this->image).'" style="width:200px;"/>';
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
        $show = new Show(Template::findOrFail($id));

        $show->field('name_en', __('Name en'));
        $show->field('name_ar', __('Name ar'));
        $show->field('image', __('Image'))->image();
//        $show->field('template_data', __('Template data'));
        $show->field('created_at', __('Created at'));
//        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Template());

        $form->text('name_en', __('English Name'));
        $form->text('name_ar', __('Arabic Name'));
        $form->image('image', __('Image'));

        return $form;
    }
}
