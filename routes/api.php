<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products/get/all', 
    [ProductController::class, 'getAllProducts']);

Route::post('/product/register',
    [ProductController::class, 'createNewProduct']);

Route::put('/product/update/{id}',
    [ProductController::class, 'updateProduct']);

Route::delete('/product/delete/{id}',
    [ProductController::class, 'deleteProduct']);