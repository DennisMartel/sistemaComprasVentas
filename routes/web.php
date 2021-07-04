<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});


Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::get('get_products_by_id', [App\Http\Controllers\ProductController::class, 'get_products_by_id'])->name('get_products_by_id');
Route::get('get_products_by_barcode', [App\Http\Controllers\ProductController::class, 'get_products_by_barcode'])->name('get_products_by_barcode');

Route::resource('providers', App\Http\Controllers\ProviderController::class);

Route::resource('purchases', App\Http\Controllers\PurchaseController::class);
Route::get('purchases/pdf/{purchase}', [App\Http\Controllers\PurchaseController::class, 'pdf'])->name('purchases.pdf');

Route::resource('sales', App\Http\Controllers\SaleController::class);
Route::get('sales/pdf/{sale}', [App\Http\Controllers\SaleController::class, 'pdf'])->name('sales.pdf');
Route::get('sales/print/{sale}', [App\Http\Controllers\SaleController::class, 'print'])->name('sales.print');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
