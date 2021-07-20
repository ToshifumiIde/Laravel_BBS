<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {//Postは名前空間の使用
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new Comment();//Commentは名前空間を使用
        $comment->post_id = $post->id;
        $comment->body = $request->body;
        $comment->save();
        return redirect()
            ->route('posts.show' , $comment);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()
            ->route('posts.show' , $comment->post);
    }
}
