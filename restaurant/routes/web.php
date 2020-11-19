<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Restocontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[Restocontroller::class,'welcome']);
Route::get("list",[Restocontroller::class,'list']);
Route::view("add",'add');
Route::post("add",[Restocontroller::class,'add']);
Route::get("register",[Restocontroller::class,'register']);
Route::get("login",[Restocontroller::class,'login']);