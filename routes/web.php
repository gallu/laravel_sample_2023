<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/2nd', [HomeController::class, 'second'])->name('second');
Route::get('/user/{id}', [HomeController::class, 'user'])->name('user');

Route::post('/test/post', [HomeController::class, 'post'])->name('test.post');

// リダイレクトのテスト
Route::get('/location', [HomeController::class, 'location'])->name('location.test');

// DBのテスト
Route::get('/db', [HomeController::class, 'db'])->name('db');



