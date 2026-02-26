<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 8 10
*/

Route::get('user/massiv', [UserController::class, 'massiv']);
Route::get('user/date', [UserController::class, 'date']);
Route::get('user/href', [UserController::class, 'href']);
Route::get('user/redcolor', [UserController::class, 'redcolor']);
Route::get('user/num3', [UserController::class, 'num3']);
Route::get('user/css', [UserController::class, 'css']);
Route::get('user/employ', [UserController::class, 'info']);
Route::get('/user/{name}/{surname}', [UserController::class, 'surnname']);
Route::get('user/show', [UserController::class, 'show']);
Route::get('user/{age}', [UserController::class, 'age']);
Route::get('post/show', [PostController::class, 'show']);


