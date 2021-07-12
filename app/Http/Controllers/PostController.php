<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    $posts = [
        "TitleA",
        "TitleB",
        "TitleC",
    ];
    return view('index')
        ->with(["posts" => $posts]);
    }
}
