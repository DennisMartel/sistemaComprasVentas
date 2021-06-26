<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Models\Provider;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('admin.purchase.index', compact('purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        return view('admin.purchase.create', compact('providers'));
    }

    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all());

        foreach ($request->product_id as $key => $value) {
            $results[] = ['product_id' => $request->product_id[$key], 
            'quantity' => $request->quantity[$key], 'price' => $request->price[$key]];
        }

        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchase.index');
    }
    
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.index', compact('purchase'));
    }
    
    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.index', compact('purchase', 'providers'));
    }
    
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchase.index');
    }
    
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchase.index');
    }
}
