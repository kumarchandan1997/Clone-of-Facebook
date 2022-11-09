<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('index',[PostController::class,'index']);
 Route::get('/post',[PostController::class,'post']);
 Route::post('save',[PostController:: class,'save']);
 Route::get('/edit_user',[PostController::class,'edit_user']);
 Route::post('/save_user',[PostController::class,'save_user']);
 Route::get('/search',[PostController::class,'search']);
