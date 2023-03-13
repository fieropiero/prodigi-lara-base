<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

/*
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers',[CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/edit/{customer}',[CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}',[CustomerController::class, 'update'])->name('customers.update');Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.destroy');
Route::delete('/customers/{customer}',[CustomerController::class, 'destroy'])->name('customers.destroy');
*/

Route::resource('customers', CustomerController::class);
/*
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/invoices',[InvoiceController::class, 'store'])->name('invoices.store');
Route::get('/invoices/edit/{invoice}',[InvoiceController::class, 'edit'])->name('invoices.edit');
Route::put('/invoices/{invoice}',[InvoiceController::class, 'update'])->name('invoices.update');
Route::delete('/invoices/{invoice}',[InvoiceController::class, 'destroy'])->name('invoices.destroy');
*/
Route::resource('invoices', InvoiceController::class);
/*
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders',[OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/edit/{order}',[OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}',[OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}',[OrderController::class, 'destroy'])->name('orders.destroy');
*/
Route::resource('orders', OrderController::class);