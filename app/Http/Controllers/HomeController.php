<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesInvoice;
use Illuminate\Support\Facades\DB;
use App\Models\PurchaseInvoice;
use App\Models\PurchaseChallan;
use App\Models\SaleChallan;
use App\Models\JobWorkChallan;
use App\Models\Transaction;
use App\Models\Accounts;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $totalSale = SalesInvoice::select(
                DB::raw('year(orderdate) as year'),
                DB::raw('month(orderdate) as month'),
                DB::raw('sum(total) as totalSale'),
            )
                ->groupBy('year')
                ->groupBy('month')
                ->get()
                ->toArray();
            $January = 0;
            $February = 0;
            $March = 0;
            $April = 0;
            $May = 0;
            $June = 0;
            $July = 0;
            $August = 0;
            $September = 0;
            $October = 0;
            $November = 0;
            $December = 0;
            foreach ($totalSale as $s) {

                if ($s['month'] == 1) {
                    $January = $s['totalSale'];
                }
                if ($s['month'] == 2) {
                    $February = $s['totalSale'];
                }
                if ($s['month'] == 3) {
                    $March = $s['totalSale'];
                }
                if ($s['month'] == 4) {
                    $April = $s['totalSale'];
                }
                if ($s['month'] == 5) {
                    $May = $s['totalSale'];
                }
                if ($s['month'] == 6) {
                    $June = $s['totalSale'];
                }
                if ($s['month'] == 7) {
                    $July = $s['totalSale'];
                }
                if ($s['month'] == 8) {
                    $August = $s['totalSale'];
                }
                if ($s['month'] == 9) {
                    $September = $s['totalSale'];
                }
                if ($s['month'] == 10) {
                    $October = $s['totalSale'];
                }
                if ($s['month'] == 11) {
                    $November = $s['totalSale'];
                }
                if ($s['month'] == 12) {
                    $December = $s['totalSale'];
                }
            }
            $data['ts'] = [$January, $February, $March, $April, $May, $June, $July, $August, $September, $October, $November, $December];
            $data['SalesInvoice'] = SalesInvoice::count();
            $data['PurchaseInvoice'] = PurchaseInvoice::count();
            $data['PurchaseChallan'] = PurchaseChallan::count();
            $data['SaleChallan'] = SaleChallan::count();
            $data['JobWorkChallan'] = JobWorkChallan::count();
            $data['CashTransaction'] = Transaction::where('income_method', 'CASH')->count();
            $data['BankTransaction'] = Transaction::where('income_method', 'BANK')->count();
            $data['Accounts'] = Accounts::count();

            return view('welcome')->with('data', $data);
        }

        if (Auth::user()->role == 'customer') {
            return view('customer-welcome');
        }
    }
}
