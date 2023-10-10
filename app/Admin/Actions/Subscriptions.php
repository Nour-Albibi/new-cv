<?php

namespace App\Admin\Actions;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends RowAction
{
    public $name = 'Subscriptions';
    protected $company_id;
    public function __construct($id)
    {
        $this->company_id=$id;
    }
    public function href()
    {
        return url('admin/company-subscriptions?user_id='.$this->company_id);
    }
}
