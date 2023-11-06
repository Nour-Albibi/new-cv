<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Visit;
use App\Services\AdminService;
use App\Services\CatalogService;
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
        if (AdminService::isAdministrator()) {
            return $content
                ->title('Dashboard')
                ->description('Description...')
                ->row(__('CV Builder Application'))
                ->row(function (Row $row) {
                    $row->column(4, function (Column $column) {
                        $customers = Customer::where('customer_type', '1')->count();
                        $infoBox = new InfoBox('Customers', 'home', 'aqua', '/admin/customers', $customers);
                        $column->append($infoBox->render());
                    });
                    $row->column(4, function (Column $column) {
                        $companies = Customer::where('customer_type', '2')->count();
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
        } else {
            if (\Admin::user()->isRole('catalog-owner')) {
                return $content
                    ->title(__('Dashboard'))
                    ->row(function (Row $row) {
                        $row->column(3, function (Column $column) {
                            $visitors = Visit::where('restaurant_id', \Admin::user()->catalog_id)->count();
                            $infoBox = new InfoBox(__('Total Visitors'), 'users', 'olive', '#', $visitors);
                            $column->append($infoBox->render());
                        });
                        $row->column(3, function (Column $column) {
                            $total_products = CatalogService::getTotalProducts(\Admin::user()->catalog_id);
                            $infoBox = new InfoBox(__('Total Products'), 'products', 'blue', '/admin/catalog-products', $total_products);
                            $column->append($infoBox->render());
                        });
                    });
            } else {
                return $content
                    ->title(__('Dashboard'));
            }
        }
    }
}



