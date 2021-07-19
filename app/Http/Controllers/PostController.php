<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //privatePropertyに$postsを設定
    // private $posts = [
    //     "TitleA",
    //     "TitleB",
    //     "TitleC",
    // ];//mysqlからpostsデータを取得するため、ここの記述は不要
    //トップにアクセスするメソッド
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();

        return view('index')
            ->with(["posts" => $posts]);
    }
    // 各ページの詳細ページにアクセスするメソッド
    // public function show($id)
    // {
    //     //postsディレクトリのshow.blade.phpを呼び出すには、posts.showと書く必要がある。
    //     $post = Post::findOrFail($id);

    //     return view('posts.show')
    //         ->with(['post' => $post]);
    // }
    // このメソッドをImplicitBindingを用いて書くと下記の通り。
    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    //投稿されたデータのDBへの保存処理
    public function store(Request $request)
    {
        $post = new Post();//インスタンスを生成
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();//DBにデータを保存
        return redirect()
            ->route('posts.index');//保存終了後、posts.indexに移動
    }
}
