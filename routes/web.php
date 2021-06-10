<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

	
Route::get('/create',[CustomerController::class, 'create']);

Route::get('/',[CustomerController::class, 'index']);

Route::post('/store',[CustomerController::class, 'store']);

Route::get('/edit/{id}',[CustomerController::class, 'edit']);

Route::get('/update/{id}',[CustomerController::class, 'update']);

Route::get('/delete/{id}',[CustomerController::class, 'delete']);

	
