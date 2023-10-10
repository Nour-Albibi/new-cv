<?php

namespace App\Admin\Actions;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class CustomerSubscriptions extends RowAction
{
    public $name = 'Subscriptions';
    protected $customer_id;
    public function __construct($id)
    {
        $this->customer_id=$id;
    }
    public function href()
    {
        return url('admin/customer-subscriptions?user_id='.$this->customer_id);
    }
}
