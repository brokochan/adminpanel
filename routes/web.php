<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SewaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// maskapai
Route::get('/maskapai', [MaskapaiController::class, 'index']);
Route::get('/maskapaiadd', [MaskapaiController::class, 'addMaskapai']);

// hotel
Route::get('/hotel', [HotelController::class, 'index']);

// sewa mobil
Route::get('/sewa', [SewaController::class, 'index']);

// invoice
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoiceadd', [InvoiceController::class, 'addInvoice']);