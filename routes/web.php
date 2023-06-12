<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo.front');
});

Route::controller(ViewController::class)->group(function () {

    Route::get('/dashboard', 'dashboard')->name('view.dashboard');
    Route::get('/dashboard/product', 'product')->name('view.product');
    Route::get('/dashboard/sales', 'sales')->name('view.sales');
    Route::get('/dashboard/settings', 'settings')->name('view.settings');
    
});


