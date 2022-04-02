<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

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

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);

Route::post('/logout',[AuthController::class,'logout']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'post_login']);


