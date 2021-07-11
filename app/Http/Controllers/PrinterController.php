<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $printer = Printer::where('id', 1)->first();
        return view('admin.printer.index', compact('printer'));
    }

    public function update(Request $request, Printer $printer)
    {
        $printer->update($request->all());
        return redirect()->route('printers.index');
    }
}
