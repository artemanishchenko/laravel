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

Route::get('post/{id}', [PostController::class, 'getAll']);
Route::get('post/getAll', [PostController::class, 'getAll']);
Route::get('user/ex41', [UserController::class, 'ex41']);
Route::get('user/ex40', [UserController::class, 'ex40']);
Route::get('user/ex37', [UserController::class, 'ex37']);
Route::get('user/ex18', [UserController::class, 'ex18']);
Route::get('user/ex17', [UserController::class, 'ex17']);
Route::get('user/ex16', [UserController::class, 'ex16']);
Route::get('user/ex15', [UserController::class, 'ex15']);
Route::get('user/ex14', [UserController::class, 'ex14']);
Route::get('user/ex13', [UserController::class, 'ex13']);
Route::get('user/ex13', [UserController::class, 'ex13']);
Route::get('user/ex12', [UserController::class, 'ex12']);
Route::get('user/ex11', [UserController::class, 'ex11']);
Route::get('user/ex10', [UserController::class, 'ex10']);
Route::get('user/ex9', [UserController::class, 'ex9']);
Route::get('user/ex8', [UserController::class, 'ex8']);
Route::get('user/ex7', [UserController::class, 'ex7']);
Route::get('user/ex6', [UserController::class, 'ex6']);
Route::get('user/ex5', [UserController::class, 'ex5']);
Route::get('user/ex4', [UserController::class, 'ex4']);
Route::get('user/ex3', [UserController::class, 'ex3']);
Route::get('user/ex2', [UserController::class, 'ex2']);
Route::get('user/num100', [UserController::class, 'num100']);
Route::get('database/num1', [UserController::class, 'num1']);
Route::get('user/shows', [UserController::class, 'shows']);
Route::get('user/showsql', [UserController::class, 'showsql']);
Route::get('user/num33', [UserController::class, 'num33']);
Route::get('user/num32', [UserController::class, 'num32']);
Route::get('user/num31', [UserController::class, 'num31']);
Route::get('user/num30', [UserController::class, 'num30']);
Route::get('user/num29', [UserController::class, 'num29']);
Route::get('user/num27', [UserController::class, 'num27']);
Route::get('user/num26', [UserController::class, 'num26']);
Route::get('user/num25', [UserController::class, 'num25']);
Route::get('user/num24', [UserController::class, 'num24']);
Route::get('user/num23', [UserController::class, 'num23']);
Route::get('user/num22', [UserController::class, 'num22']);
Route::get('user/num21', [UserController::class, 'num21']);
Route::get('user/num20', [UserController::class, 'num20']);
Route::get('user/num19', [UserController::class, 'num19']);
Route::get('user/num18', [UserController::class, 'num18']);
Route::get('user/num17', [UserController::class, 'num17']);
Route::get('user/num16', [UserController::class, 'num16']);
Route::get('user/num15', [UserController::class, 'num15']);
Route::get('user/num14', [UserController::class, 'num14']);
Route::get('user/num13', [UserController::class, 'num13']);
Route::get('user/num12', [UserController::class, 'num12']);
Route::get('user/num11', [UserController::class, 'num11']);
Route::get('user/num10', [UserController::class, 'num10']);
Route::get('user/massiv9', [UserController::class, 'massiv9']);
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
