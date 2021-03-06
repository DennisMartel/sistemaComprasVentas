<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('providers', App\Http\Controllers\ProviderController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class)->names('permissions')->only([
    'index', 'create', 'store', 'destroy'
]);

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::get('get_products_by_id', [App\Http\Controllers\ProductController::class, 'get_products_by_id'])->name('get_products_by_id');
Route::get('get_products_by_barcode', [App\Http\Controllers\ProductController::class, 'get_products_by_barcode'])->name('get_products_by_barcode');
Route::get('change_status/products/{product}', [App\Http\Controllers\ProductController::class, 'change_status'])->name('products.change_status');
Route::get('products/upload/{product}', [App\Http\Controllers\PurchaseController::class, 'upload'])->name('products.upload');

Route::resource('purchases', App\Http\Controllers\PurchaseController::class);
Route::get('purchases/pdf/{purchase}', [App\Http\Controllers\PurchaseController::class, 'pdf'])->name('purchases.pdf');
Route::get('purchases/upload/{purchase}', [App\Http\Controllers\PurchaseController::class, 'upload'])->name('purchases.upload');
Route::get('change_status/purchases/{purchase}', [App\Http\Controllers\PurchaseController::class, 'change_status'])->name('purchases.change_status');

Route::resource('sales', App\Http\Controllers\SaleController::class);
Route::get('sales/pdf/{sale}', [App\Http\Controllers\SaleController::class, 'pdf'])->name('sales.pdf');
Route::get('sales/print/{sale}', [App\Http\Controllers\SaleController::class, 'print'])->name('sales.print');
Route::get('change_status/sales/{sale}', [App\Http\Controllers\SaleController::class, 'change_status'])->name('sales.change_status');
Route::get('sales/upload/{sale}', [App\Http\Controllers\SaleController::class, 'upload'])->name('sale.upload');

Route::get('sale/reports_day', [App\Http\Controllers\ReportController::class, 'reports_day'])->name('reports.day');
Route::get('sale/reports_date', [App\Http\Controllers\ReportController::class, 'reports_date'])->name('reports.date');
Route::post('sale/reports_results', [App\Http\Controllers\ReportController::class, 'reports_results'])->name('report.results');

Route::resource('business', App\Http\Controllers\BusinessController::class)->names('business')->only([
    'index', 'update'
]); 

Route::resource('printers', App\Http\Controllers\PrinterController::class)->names('printers')->only([
    'index', 'update'
]); 