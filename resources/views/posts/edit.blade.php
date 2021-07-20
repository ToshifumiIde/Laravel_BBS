<x-layout>
    <x-slot name='title'>
        Edit Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{route('posts.show' , $post)}}">Back</a>
    </div>
    <h1>
        Edit Post
    </h1>
    <form action="{{route('posts.update' , $post)}}" method='post'>
        @method('PATCH')
        {{-- 現在のLaravelはupdateする時のmethodがpatchに対応していないため、@method('PATCH')と明示的に指示する必要がある --}}
        @csrf
        <div class="form__group">
            <label for="">
                Title
                <input type="text" name='title' value='{{old("title" , $post->title)}}'>
            </label>
            @error('title')
                <div class="error" >
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form__group">
            <label for="">
                Body
                <textarea name="body">{{old("body" , $post->body)}}</textarea>
                {{-- textareaの場合、タグの中に{{old("body")}}とする必要がある点に注意 --}}
            </label>
            @error('body')
            <div class="error">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form__button">
            <button>Update</button>
        </div>
    </form>
</x-layout>
