<x-layout>
    <x-slot name='title'>
        Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{route('posts.index')}}">back</a>
    </div>
    <h1>
        Add New Post
    </h1>
    <form action="{{ route('posts.store') }}" method='post'>
        @csrf
        <div class="form__group">
            <label for="">
                Title
                <input type="text" name='title' value='{{old("title")}}'>
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
                <textarea name="body">{{old("body")}}</textarea>
                {{-- textareaの場合、タグの中に{{old("body")}}とする必要がある点に注意 --}}
            </label>
            @error('body')
            <div class="error">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form__button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
