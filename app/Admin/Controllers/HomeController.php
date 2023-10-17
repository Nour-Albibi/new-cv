<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Callback;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::environment());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::dependencies());
                // });
                $row->column(4, function (Column $column) {
                    $customers=Customer::where('customer_type','1')->count();
                    $infoBox = new InfoBox('Customers', 'tests', 'aqua', '/admin/customers', $customers);
                    $column->append($infoBox->render());
                });
                $row->column(4, function (Column $column) {
                    $companies=Customer::where('customer_type','2')->count();
                    $infoBox = new InfoBox('Companies', 'Companies', 'aqua', '/admin/companies', $companies);
                    $column->append($infoBox->render());

                });
                $row->column(4, function (Column $column) {
                    $income = DB::table("invoices")
                    ->where('status', '2')
                    ->where('invoice_date', '>', now()->subDays(30)->endOfDay())
                    ->sum('total_amount');
                    // dd($income);
                    $infoBox = new InfoBox('income', 'tests', 'aqua', '/admin/invoices', $income);
                    $column->append($infoBox->render());
                });


            });
    }
}



