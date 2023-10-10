<?php

namespace App\Admin\Actions;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class CustomerCVs extends RowAction
{
    public $name = 'CVs';
    protected $customer_id;
    public function __construct($id)
    {
        $this->customer_id=$id;
    }
    public function href()
    {
        return url('admin/customer-cvs?user_id='.$this->customer_id);
    }
}
