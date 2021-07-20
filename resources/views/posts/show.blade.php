<x-layout>
    {{-- lauyout.blade.phpで設定した$titleに値を格納していく。 --}}
    {{-- 方法は、<X-slot name="title"></x-solt>で囲い、name属性に変数名を格納する。--}}
    <x-slot name="title">
        {{$post->title}} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{route('posts.index')}}">Back</a>
            {{-- 名前をつけたroutingを呼び出す場合、{{route()}}を使用--}}
            {{-- 今回はposts.indexという名前のroutingを呼ぶため{{route('posts.index')}} を呼ぶ--}}
    </div>
    <h1>
        <span>{{$post->title}}</span>
        <a href="{{route('posts.edit' , $post)}}">[Edit]</a>
        <form action="{{route('posts.destroy' , $post)}}" method="post" id="js-delete_post">
            @method("DELETE")
            @csrf
            <button class="button" >[ X ]</button>
        </form>
    </h1>
    <p>{!!nl2br(e($post->body))!!}</p>
    <script>
        "use strict";
        {
        console.log("hello");
        const del = document.getElementById("js-delete_post");
        del.addEventListener('submit',(e)=>{
            e.preventDefault();
            console.log("こんにちは");
            if(!window.confirm("Are You sure to delete ?")){
                return;
            }
            e.target.submit();//buttonクリック時の送信処理
        });
        }
    </script>
</x-layout>
