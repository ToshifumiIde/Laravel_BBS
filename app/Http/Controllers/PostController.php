<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;//App\Http\Requestsの名前空間に属するPostRequestクラスを使用

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
    { //名前空間Postの$postを呼び出し
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    //投稿されたデータのDBへの保存処理
    public function store(PostRequest $request)
    {//名前空間Requestの$requestを呼び出し
        //$requestで送信された投稿に対し、validationをかける
    //     $request->validate([
    //         'title' => 'required|min:3',
    //         'body' => 'required',
    //     ],[
    //         'title.required' => 'タイトルは必須です',
    //         'title.min' => ':min 文字以上入力してください',
    //         'body.required' => '本文は必須です',
    //     ]
    // );
    // ここまでのバリデーション機能はPostRequest.phpのclassにまとめて、PostRequest $requestで呼び出しているため、記述不要

        $post = new Post();//インスタンスを生成
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();//DBにデータを保存
        return redirect()
            ->route('posts.index');//保存終了後、posts.indexに移動
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request , Post $post)
    {//インプリシットバインディングでPost $postを渡す...理解していない
        //$requestで送信された投稿に対し、validationをかける
    //     $request->validate([
    //         'title' => 'required|min:3',
    //         'body' => 'required',
    //     ],[
    //         'title.required' => 'タイトルは必須です',
    //         'title.min' => ':min 文字以上入力してください',
    //         'body.required' => '本文は必須です',
    //     ]
    // );
    // 上記バリデーションに関しては、PostRequest.phpのclass内で記述し
    // PostRequest $requestにて呼び出しているため不要

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();//DBにデータを保存
        return redirect()
            ->route('posts.show' , $post);//保存終了後、posts.showに移動。第二引数に$postを渡し、投稿された内容もわたす。
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()
            ->route('posts.index');
    }
}
