<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Request;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $purchases = Purchase::all();
        return view('admin.purchase.index', compact('purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        $products = Product::get();
        return view('admin.purchase.create', compact('providers', 'products'));
    }

    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all() + [
            'user_id' => Auth::user()->id,
            'purchase_date' => Carbon::now('America/El_Salvador'),
        ]);

        foreach ($request->product_id as $key => $value) {
            $results[] = ['product_id' => $request->product_id[$key], 
            'quantity' => $request->quantity[$key], 'price' => $request->price[$key]];
        }

        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }
    
    public function show(Purchase $purchase)
    {
        $subtotal = 0;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach ($purchaseDetails as $purchaseDetail) {
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }

        return view('admin.purchase.show', compact('purchase', 'purchaseDetails', 'subtotal'));
    }
    
    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.index', compact('purchase', 'providers'));
    }
    
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }
    
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index');
    }

    public function pdf(Purchase $purchase)
    {
        $subtotal = 0;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach ($purchaseDetails as $purchaseDetail) {
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }

        $pdf = PDF::loadView('admin.purchase.pdf', compact('purchase', 'subtotal', 'purchaseDetails'));
        return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf');
    }

    public function upload(Request $request, Purchase $purchase)
    {

    }

    public function change_status(Purchase $purchase)
    {
        $purchase->status == 'VALID' 
                ? $purchase->update(['status' => 'CANCELED']) 
                : $purchase->update(['status' => 'VALID']);
        return redirect()->back();
    }
}
