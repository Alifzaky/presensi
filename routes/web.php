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
Route::get('home',[App\Http\Controllers\ViewController::class,'index']);
Route::get('/laporan',[App\Http\Controllers\ViewController::class,'laporan']);
Route::get('/contack',[App\Http\Controllers\ViewController::class,'contack']);
Route::get('/navbar',[App\Http\Controllers\ViewController::class,'navbar']);