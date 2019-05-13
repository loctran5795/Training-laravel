@extends('layouts.app')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="postBox">
        <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Image</label>
            <input type="file" name="images">
            <label for="">title</label>
            <input class="formBox" type="text" name="title" value="{{ $post->title }}">
            @if($errors->any())
            <div class="invalid">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
            <label for="">content</label>
            <textarea class="area" type="text" row="5" name="content" placehoder="what do you think....???">{{ $post->content }}</textarea>
            <button class="button" type="submit">Edit</button>
        </form>    
    </div>

@endsection