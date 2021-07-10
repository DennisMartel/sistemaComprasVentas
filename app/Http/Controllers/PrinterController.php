<?php

namespace App\Http\Controllers;

use App\Http\Requests\Printer\UpdateRequest;
use App\Models\Printer;

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

    public function update(UpdateRequest $request, Printer $printer)
    {
        $printer->update($request->all());
        return redirect()->route('printers.index');
    }
}
