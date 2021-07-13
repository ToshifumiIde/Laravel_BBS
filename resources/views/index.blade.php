
{{-- componentを読み込む場合、<x-コンポーネント名></x-コンポーネント名> で囲い、その中に個別のviewを格納すればOK--}}
<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>

    <h1>My BBS</h1>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="{{route('posts.show' , $index)}}">
                        {{$post}}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
</x-layout>
