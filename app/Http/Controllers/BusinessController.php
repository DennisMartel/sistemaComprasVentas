<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $business = Business::where('id', 1)->first();
        return view('admin.business.index', compact('business'));
    }

    public function update(Request $request, Business $business)
    {
        if ($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $imagen = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/image/logo'), $imagen);
        }

        $business->update($request->all()+ [
            'logo' => $imagen,
        ]);
        
        return redirect()->route('business.index');
    }
}