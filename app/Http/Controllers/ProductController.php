<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.products.create', compact('categories', 'providers'));
    }

    public function store(StoreRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }
    
    public function show(Product $products)
    {
        return view('admin.products.index', compact('products'));
    }
    
    public function edit(Product $product)
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.products.index', compact('product','categories','providers'));
    }
    
    public function update(UpdateRequest $request, Product $products)
    {
        $products->update($request->all());
        return redirect()->route('products.index');
    }
    
    public function destroy(Product $products)
    {
        $products->delete();
        return redirect()->route('products.index');
    }
}
