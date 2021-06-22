<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OcurrenceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::prefix('/home')->group(function (){
    Route::get('/createProduct', [HomeController::class, 'createProductView'])->name('createProduct');
    Route::post('/createProduct', [HomeController::class, 'createProduct'])->name('createProduct');
    
    
    Route::get('/sales', [SalesController::class, 'salesView'])->name('sales');
    //create sales
    Route::get('/createSales', [SalesController::class, 'createSaleView'])->name('createSales');
    Route::post('/createSales', [SalesController::class, 'createSale'])->name('createSales');

    Route::get('/clients', [ClientController::class, 'clientView'])->name('clients');
    //create client
    Route::get('/createClient', [ClientController::class, 'createClientView'])->name('createClient');
    Route::post('/createClient', [ClientController::class, 'createClient'])->name('createClient');

    Route::get('/occurrence', [OcurrenceController::class, 'occurrenceView'])->name('occurrences');
    //create occurrences
    Route::get('/createOccurrence', [OcurrenceController::class, 'createOccurrenceView'])->name('createOccurrence');
    Route::post('/createOccurrence', [OcurrenceController::class, 'createOccurrence'])->name('createOccurrence');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
