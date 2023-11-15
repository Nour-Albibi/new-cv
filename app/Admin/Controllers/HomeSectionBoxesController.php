<?php

namespace App\Admin\Controllers;

use App\Models\HomeSectionBoxe;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomeSectionBoxesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomeSectionBoxe';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeSectionBoxe());

        $grid->column('icon', __('Icon'))->image();
        $grid->column('title_ar', __('Arabic Title'));
        $grid->column('title_en', __('English Title'));
        $grid->column('description_ar', __('Arabic Description'));
        $grid->column('description_en', __('English Description'));

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
        $show = new Show(HomeSectionBoxe::findOrFail($id));

        $show->field('icon', __('Icon'))->image();
        $show->field('title_ar', __('Arabic Title'));
        $show->field('title_en', __('English Title'));
        $show->field('description_ar', __('Arabic Description'));
        $show->field('description_en', __('English Description'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HomeSectionBoxe());

        $form->image('icon', __('Icon'));
        $form->text('title_ar', __('Arabic Title'));
        $form->text('title_en', __('English Title'));
        $form->textarea('description_ar', __('Arabic Description'));
        $form->textarea('description_en', __('English Description'));

        return $form;
    }
}
