<?php

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


Route::get('/', function () {
    return view('login');
});
*/

Route::get('/','App\Http\Controllers\Controlador@login');

Route::get('/entrada','App\Http\Controllers\Controlador@entrada');

Route::get('/adicionar','App\Http\Controllers\Controlador@adicionar');

Route::get('/visualizar','App\Http\Controllers\Controlador@visualizar');
