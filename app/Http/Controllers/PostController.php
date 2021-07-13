<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //privatePropertyに$postsを設定
    private $posts = [
        "TitleA",
        "TitleB",
        "TitleC",
    ];

    //トップにアクセスするメソッド
    public function index()
    {
    return view('index')
        ->with(["posts" => $this->posts]);
    }
    //各ページの詳細ページにアクセスするメソッド
    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
