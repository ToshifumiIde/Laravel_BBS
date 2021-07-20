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
    </h1>
    <p>{!!nl2br(e($post->body))!!}</p>
</x-layout>
