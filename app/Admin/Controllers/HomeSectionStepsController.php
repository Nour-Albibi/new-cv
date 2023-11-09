<?php

namespace App\Admin\Controllers;

use App\Models\HomeSectionStep;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomeSectionStepsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Steps Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeSectionStep());
        $grid->sortable();
        $grid->column('image', __('Image'))->image();
        $grid->column('title_en', __('Title'));
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
        $show = new Show(HomeSectionStep::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image();
        $show->field('title_ar', __('Title ar'));
        $show->field('title_en', __('Title en'));
        $show->field('description_ar', __('Description ar'));
        $show->field('description_en', __('Description en'));
        $show->field('order_column', __('Order'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HomeSectionStep());

        $form->image('image', __('Image'));
        $form->text('title_ar', __('Arabic Title'));
        $form->text('title_en', __('English Title'));
        $form->text('description_ar', __('Arabic Description'));
        $form->text('description_en', __('English Description'));

        return $form;
    }
}
