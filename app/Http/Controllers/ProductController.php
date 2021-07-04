<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.product.create', compact('categories', 'providers'));
    }

    public function store(StoreRequest $request)
    {
        if ($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/image'), $image_name);
        }

        Product::create($request->all() + [
            'imagen' => $image_name,
        ]);

        return redirect()->route('products.index');
    }
    
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }
    
    public function edit(Product $product)
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.product.edit', compact('product','categories','providers'));
    }
    
    public function update(UpdateRequest $request, Product $product)
    {
        if ($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/image'), $image_name);
        }

        $product->update($request->all()+ [
            'imagen' => $image_name,
        ]);
        
        return redirect()->route('products.index');
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function get_products_by_barcode(Request $request){
        if ($request->ajax()) {
            $products = Product::where('code', $request->code)->firstOrFail();
            return response()->json($products);
        }
    }

    public function get_products_by_id(Request $request){
        if ($request->ajax()) {
            $products = Product::findOrFail($request->product_id);
            return response()->json($products);
        }
    }
}
