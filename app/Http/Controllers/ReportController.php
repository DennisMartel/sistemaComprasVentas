<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function reports_day(){
        $sales = Sale::WhereDate('sale_date', Carbon::today('America/El_Salvador'))->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_day', compact('sales', 'total'));
    }
    public function reports_date(){
        $sales = Sale::whereDate('sale_date', Carbon::today('America/El_Salvador'))->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_date', compact('sales', 'total'));
    }
    public function reports_results(Request $request){
        $fi = $request->fecha_ini. ' 00:00:00';
        $ff = $request->fecha_fin. ' 23:59:59';
        $sales = Sale::whereBetween('sale_date', [$fi, $ff])->get();
        $total = $sales->sum('total');
        return view('admin.report.reports_date', compact('sales', 'total')); 
    }
}
