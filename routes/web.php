<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('create',[HomeController::class,'create']);
Route::post('store',[HomeController::class,'store'])->name('store');
Route::get('Index',[HomeController::class,'Index'])->name('Index');
Route::get('edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::put('update/{Farmer_Details}',[HomeController::class,'update'])->name('update');
Route::get('delete/{Farmer_Details}',[HomeController::class,'delete'])->name('delete');
