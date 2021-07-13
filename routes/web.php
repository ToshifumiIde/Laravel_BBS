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

// Route::get('/', ['App\Http\Controllers\PostController','index']);
// Route::get('/', [App\Http\Controllers\PostController::class,'index']);
//上で use App≠Http\Controllers\PostControllerと記載すると、さらに短縮した記法が可能
Route::get('/', [PostController::class,'index']);

// 各ページへのルーティングは、ベタうちするのではなく、変数で格納する
// Route::get('/posts/0', [PostController::class,'index']);
// Route::get('/posts/1', [PostController::class,'index']);
// Route::get('/posts/2', [PostController::class,'index']);
Route::get('/posts/{id}', [PostController::class,'show']);
//PostControllerにshowメソッドを作成して、その引数にidを渡せば良い
