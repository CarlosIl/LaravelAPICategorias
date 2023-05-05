<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AuthController;

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

Route::post('/token', [AuthController::class, 'createToken']); 


Route::middleware('auth:api')->group( function () { 

    // Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias'); 

    Route::resource('categorias', CategoriaController::class); 

}); 
