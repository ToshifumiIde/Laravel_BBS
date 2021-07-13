<?php
// var_dump($posts);
// exit;
// dd($posts); //dump&dieの略。上記と全く同じ結果となる。
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
<title>{{ $title }}</title>
{{-- layout内で変数を持つことも可能、上記$titleはlayout.blade.phpの変数 --}}
{{-- cssのリンク先をpublicディレクトリ下にするためには{{url()}}と記載する必要がある --}}
<link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header></header>
    <main>
        <div class="container">
        {{$slot}}
        </div>
    </main>
    <footer></footer>
</body>
</html>
