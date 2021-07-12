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
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <h1>My BBS</h1>
            {{-- <ul>
                <li>
                    <?php echo htmlspecialchars($posts[0] , ENT_QUOTES,'UTF-8') ;?>
                </li>
                <li>{{$posts[0]}}</li>
                <?php foreach($posts as $post) :?>
                <li><?php echo htmlspecialchars($post,ENT_QUOTES, 'UTF-8');?></li>
                <?php endforeach;?>
            </ul> --}}
            {{-- <ul>
                @foreach ($posts as $post)
                <li>{{$post}}</li>
                @endforeach
            </ul> --}}
            <ul>
                @forelse ($posts as $post)
                    <li>{{$post}}</li>
                @empty
                    <li>No posts yet!</li>
                @endforelse
            </ul>
        </div>
    </main>
    <footer></footer>
</body>
</html>
