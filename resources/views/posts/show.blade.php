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
            <div class="back-link">
               &laquo; <a href="/">back</a>
            </div>

            <h1>{{$post}}</h1>
        </div>
    </main>
    <footer></footer>
</body>
</html>
