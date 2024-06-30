<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DocController;

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
    return view('index');
});
Route::get('/evolution', function () {
    return view('evolution');
});
Route::get('/center', function () {
    return view('center');
});
Route::get('/news',[PostController::class,'index']);
Route::get('/news/{post}',[PostController::class,'show']);
Route::get('/activity',[ActivityController::class,'index']);
Route::get('/activity/{activity}',[ActivityController::class,'show']);

Route::get('/download',[DocController::class,'index']);
