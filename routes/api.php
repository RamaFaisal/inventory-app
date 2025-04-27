<?php

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

Route::get('/admins', [App\Http\Controllers\AdminController::class, 'index']);
Route::post('/admins', [App\Http\Controllers\AdminController::class, 'store']);

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);

Route::get('/suppliers', [App\Http\Controllers\SupplierController::class, 'index']);
Route::post('/suppliers', [App\Http\Controllers\SupplierController::class, 'store']);

Route::get('/items', [App\Http\Controllers\ItemController::class, 'index']);
Route::post('/items', [App\Http\Controllers\ItemController::class, 'store']);

Route::get('/items/summary', [App\Http\Controllers\ItemController::class, 'summary']);
Route::get('/items/low-stock', [App\Http\Controllers\ItemController::class, 'lowStock']);
