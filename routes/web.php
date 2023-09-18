<?php

use App\Http\Controllers\MovieController;
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
Route::get('/addform',[MovieController::class,'add'])->name('add');
Route::post('/',[MovieController::class,'store'])->name('store');
Route::get('/',[MovieController::class,'list'])->name('list');
Route::get('/{id}',[MovieController::class,'delete'])->name('delete');
Route::patch('/{id}',[MovieController::class,'update'])->name('update');