<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromotionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/category/list',[CategoryController::class ,'index'])->name('category.list');
Route::post('/category/create',[CategoryController::class ,'store'])->name('category.create');
Route::get('/category/show/{id}',[CategoryController::class ,'show'])->name('category.show');
Route::put('/category/update/{id}',[CategoryController::class ,'update'])->name('category.update');
Route::delete('/category/delete/{id}',[CategoryController::class ,'destroy'])->name('category.delete');


Route::get('/product/list',[ProductController::class ,'index'])->name('product.list');
Route::get('/product/show/{id}',[ProductController::class ,'show'])->name('product.show');
Route::post('/product/create',[ProductController::class ,'store'])->name('product.create');

//promotion routes

Route::get('/promotion/list',[PromotionController::class ,'index'])->name('promotion.list');
Route::get('/promotion/show/{id}',[PromotionController::class ,'show'])->name('promotion.show');
Route::post('/promotion/create',[PromotionController::class ,'store'])->name('promotion.create');
Route::put('/promotion/update/{id}',[PromotionController::class ,'update'])->name('promotion.update');
