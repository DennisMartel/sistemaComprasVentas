<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\UpdateRequest;
use App\Models\Business;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $business = Business::where('id', 1)->first();
        return view('admin.category.index', compact('business'));
    }

    public function update(UpdateRequest $request, Business $business)
    {
        $business->update($request->all());
        return redirect()->route('business.index');
    }
}