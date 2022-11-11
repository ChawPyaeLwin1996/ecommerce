<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AjaxController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ConfigController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PackagesController;
use App\Http\Controllers\Api\PlaceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Other routes
Route::get('/config', ConfigController::class);
Route::resource('products', ProductController::class)->only('index', 'show');
Route::post('/customers/check', [AjaxController::class, 'checkCustomer']);
Route::get('/packages', [PackagesController::class, 'index']);
Route::get('/place', [PlaceController::class, 'index']);