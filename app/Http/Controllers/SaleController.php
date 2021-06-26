<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use App\Models\Sale;
use App\Models\Client;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('admin.sale.index', compact('sales'));
    }

    public function create()
    {
        $clients = Client::get();
        return view('admin.sale.create', compact('clients'));
    }

    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());

        foreach ($request->product_id as $key => $value) {
            $results[] = ['product_id' => $request->product_id[$key], 
            'quantity' => $request->quantity[$key], 'price' => $request->price[$key],
            'discount' => $request->discount[$key]];
        }

        $sale->saleDetails()->createMany($results);

        return redirect()->route('sale.index');
    }
    
    public function show(Sale $sale)
    {
        return view('admin.sale.index', compact('sale'));
    }
    
    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.sale.index', compact('sale', 'clients'));
    }
    
    public function update(UpdateRequest $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sale.index');
    }
    
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sale.index');
    }
}
