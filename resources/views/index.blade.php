<?php

// var_dump($posts);
// exit;
// dd($posts); //dump&dieの略。上記と全く同じ結果となる。

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
<title>My BBS</title>
{{-- cssのリンク先をpublicディレクトリ下にするためには{{url()}}と記載する必要がある --}}
<link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <h1>My BBS</h1>
            <ul>
                @forelse ($posts as $index => $post)
                    <li>
                        <a href="/posts/{{$index}}">
                            {{$post}}
                        </a>
                    </li>
                @empty
                    <li>No posts yet!</li>
                @endforelse
            </ul>
        </div>
    </main>
    <footer></footer>
</body>
</html>
