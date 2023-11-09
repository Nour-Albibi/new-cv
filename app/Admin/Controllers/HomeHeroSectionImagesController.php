<?php

namespace App\Admin\Controllers;

use App\Models\HighlightSectionImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HomeHeroSectionImagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HighlightSectionImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HighlightSectionImage());

        $grid->column('id', __('Id'));
        $grid->column('hero_section_id', __('Hero section id'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(HighlightSectionImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('hero_section_id', __('Hero section id'));
        $show->field('image', __('Image'));
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
        $form = new Form(new HighlightSectionImage());

        $form->number('hero_section_id', __('Hero section id'));
        $form->image('image', __('Image'));

        return $form;
    }
}
