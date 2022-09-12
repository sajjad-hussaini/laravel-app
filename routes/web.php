<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Models\user;

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


Route::get('/user',[userController::class,'index'])->name('create-user');
Route::get('/user/view',[userController::class,'view']);
Route::post('/user',[userController::class,'store']);
Route::get('user/delete/{id}',[userController::class,'delete'])->name('user-delete');
Route::get('/user/edit/{id}',[userController::class,'edit'])->name('user-edit');
Route::post('/user/update/{id}',[userController::class,'update'])->name('user-update');