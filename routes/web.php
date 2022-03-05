<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/board', function () {
    return view('/posts/board');
});
// 必要要素をまとめて使える
// Route::resource('posts', 'PostController');
// // 必要な項目だけを使えるように指定可能
// Route::resource('posts', 'PostController', ['only' => ['index', 'create', 'edit', 'store', 'destroy']]);

