<?php

namespace App\Admin\Controllers;

use App\Models\HomeHeroSection;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomeHeroSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomeHeroSection';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeHeroSection());

        $grid->column('id', __('Id'));
        $grid->column('main_title_en', __('Main title'))->display(function(){
            return $this->main_title_en;
        });
        $grid->column('sub_title_en', __('Sub title'));
        $grid->column('description_en', __('Description'));


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
        $show = new Show(HomeHeroSection::findOrFail($id));

        $show->field('main_title_ar', __('Arabic Main title'));
        $show->field('main_title_en', __('English Main title'));
        $show->field('sub_title_ar', __('Arabic Sub title'));
        $show->field('sub_title_en', __('English Sub title'));
        $show->field('description_ar', __('Arabic Description'));
        $show->field('description_en', __('English Description'));
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
        $form = new Form(new HomeHeroSection());

        $form->summernote('main_title_ar', __('Arabic Main title'));
        $form->summernote('main_title_en', __('English Main title'));
        $form->text('sub_title_ar', __('Arabic Sub title'));
        $form->text('sub_title_en', __('English Sub title'));
        $form->text('description_ar', __('Arabic Description'));
        $form->text('description_en', __('English Description'));
        $form->hasMany('images', __('Image'), function (Form\NestedForm $form) {
            $form->hidden('id');
            $form->image('image',__('Image'))->help('width:700px;height:900px;recommended image ext: webp');
        });
        return $form;
    }
}
