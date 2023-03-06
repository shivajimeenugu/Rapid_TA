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
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('root');


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add', [\App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::get('addbill',[App\Http\Controllers\HomeController::class, 'addBill']);
Route::get('getBills',[App\Http\Controllers\HomeController::class, 'getBills']);
Route::get('getRecentBill',[App\Http\Controllers\HomeController::class, 'getRecentBill']);
