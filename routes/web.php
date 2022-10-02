<?php

use App\Http\Controllers\mycontroller;
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
// Route::get('/',[mycontroller::class])
route::get('/',[mycontroller::class,'index']);
route::get('/about',[mycontroller::class,'about']);
route::get('/contact',[mycontroller::class,'contact']);
route::get('/services',[mycontroller::class,'services']);
// route::get('/','App\Http\Controllers\mycontroller@index');

// Route::get('/', function () {
//     return view('welcome');
// });
