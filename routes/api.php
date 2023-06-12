<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function () {

    Route::get('users', 'index');
    Route::post('user/create', 'store');
    Route::get('user/{id}', 'show');
    Route::put('user/update/{id}', 'update');
    Route::delete('user/delete/{id}', 'destroy');

});

Route::controller(AdminController::class)->group(function () {

    Route::get('admins', 'index');
    Route::post('admin/create', 'store');
    Route::get('admin/{id}', 'show');
    Route::put('admin/update/{id}', 'update');
    Route::delete('admin/delete/{id}', 'destroy');
    
});

