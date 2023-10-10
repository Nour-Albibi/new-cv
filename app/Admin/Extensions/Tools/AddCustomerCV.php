<?php

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;

class AddCustomerCV extends AbstractTool
{
    protected function script()
    {
    }

    public function render()
    {
        return '<a href="'.url('admin/customer-cvs/create?user_id='.\request('user_id')).'" class="btn btn-sm btn-success import-post">Add New CV</a>';
    }
}
