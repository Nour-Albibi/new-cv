<?php

namespace App\Admin\Actions;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class DownloadCV extends RowAction
{
    public $name = 'View CV';
    protected $cv_id;
    public function __construct($id)
    {
        $this->cv_id=$id;
    }
    public function href()
    {
        return url('admin/view_cv/'.$this->cv_id);
    }
}
