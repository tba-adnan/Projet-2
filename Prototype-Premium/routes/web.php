<?php

use App\Http\Controllers\PromotionController;
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


Route::get('index',[PromotionController::class,'index']);
Route::get('create',[PromotionController::class,'create']);
Route::post('add',[PromotionController::class,'save']);
Route::get('edit/{id}',[PromotionController::class,'edit']);
Route::get('delete/{id}',[PromotionController::class,'delete']);
Route::post('update/{id}',[PromotionController::class,'update']);
Route::get('search',[PromotionController::class,'search']);

