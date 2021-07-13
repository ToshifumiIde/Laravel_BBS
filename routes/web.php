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
// Route::get('/', [PostController::class,'index']);
// routingに名前を付けることも可能。下記の通りに->name()とすることでroutingに名前をつけられる。
// routingに名前をつけておくことで、routingそのものに変更があっても、名前は変更されないから変更に強くなる。
Route::get('/' , [PostController::class , 'index'])
    ->name('posts.index');
//view側での呼び出し方法は{{route(posts.index)}}でOK。


// 各ページへのルーティングは、ベタうちするのではなく、変数で格納する
// Route::get('/posts/0', [PostController::class,'index']);
// Route::get('/posts/1', [PostController::class,'index']);
// Route::get('/posts/2', [PostController::class,'index']);
// これだと変更に強くない。以下に変更
// Route::get('/posts/{id}', [PostController::class,'show']);
// PostControllerにshowメソッドを作成して、その引数にidを渡せば良い。
// idをリンクに渡す場合{id}を記載
Route::get('/posts/{id}' , [PostController::class , 'show'])
    ->name('posts.show');
// view側での呼び出し方法は{{route('posts.show')}}でOK。
// パラメータ（今回はid）がある場合、引数を追加して渡せばOK
