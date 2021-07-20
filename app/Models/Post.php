<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Laravelの仕様でPostモデルは -> posts テーブルに紐づく
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    // $post->comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    //これでPostモデルからCommentモデルの紐付けはできたが、CommentモデルからPostモデルへの紐付け設定も必要
}
