<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CountryController;

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
    return view('welcome');
});

//Routing Customer
Route::get('/customer', 'App\Http\Controllers\CustomerController@getData');
Route::get("/editCustomer/{customer_id}","App\Http\Controllers\CustomerController@editData");
Route::get("/deleteCustomer/{customer_id}","App\Http\Controllers\CustomerController@deleteData");
Route::view("/addcustomer", "Customer\add_customer");
Route::post("/addcustomer", "App\Http\Controllers\CustomerController@addData");
Route::post("/editcustomer", "App\Http\Controllers\CustomerController@update");

//Routing Stock
Route::get('/stock', 'App\Http\Controllers\StockController@getData');
Route::get("/editStock/{stock_id}","App\Http\Controllers\StockController@editData");
Route::get("/deleteStock/{stock_id}","App\Http\Controllers\StockController@deleteData");
Route::view("/addstock", "Stock\add_stock");
Route::post("/addstock", "App\Http\Controllers\StockController@addData");
Route::post("/editstock", "App\Http\Controllers\StockController@update");

//Routing Invoice
Route::get('/invoice', 'App\Http\Controllers\InvoiceController@getData');
Route::get("/editInvoice/{invoice_no}","App\Http\Controllers\InvoiceController@editData");
Route::get("/deleteInvoice/{invoice_no}","App\Http\Controllers\InvoiceController@deleteData");
Route::view("/addinvoice", "Invoice\add_Invoice");
Route::post("/addinvoice", "App\Http\Controllers\InvoiceController@addData");
Route::post("/editinvoice", "App\Http\Controllers\InvoiceController@update");

//Routing Country
Route::get('/country', 'App\Http\Controllers\CountryController@getData');
Route::get("/editCountry/{country_id}","App\Http\Controllers\CountryController@editData");
Route::get("/deleteCountry/{country_id}","App\Http\Controllers\CountryController@deleteData");
Route::view("/addcountry", "Country\add_Country");
Route::post("/addcountry", "App\Http\Controllers\CountryController@addData");
Route::post("/editcountry", "App\Http\Controllers\CountryController@update");