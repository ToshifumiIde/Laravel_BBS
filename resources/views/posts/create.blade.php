<x-layout>
    <x-slot name='title'>
        Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        {{-- &laquo; <a href="{{route('posts.index')}}">back</a> --}}
    </div>
    <h1>
        Add New Post
    </h1>
    <form action="" method='post'>
        @csrf
        <div class="form__group">
            <label for="">
                Title
                <input type="text" name='title'>
            </label>
        </div>
        <div class="form__group">
            <label for="">
                Body
                <textarea name="body" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="form__button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
