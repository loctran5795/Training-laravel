@extends('layouts.app')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <div class="Parent">
        <img src="{{ $post->image_post }}" style="width:400px" alt="123">
        <h2>Title: {{ $post->title }} </h2>
        <p>Content: {{ $post->content }} </p>
        <br>
        <a href="{{ route('post.changeLike', $post) }}"><i style="font-size: 50px;" class="far fa-thumbs-up"></i></a>
        {{-- <form action="{{ route('post.changeLike', $post) }}" method="GET">
            @csrf
                <i style="font-size: 50px;" class="far fa-thumbs-up"></i> 
            <button type="submit">like</button>
        </form> --}}
        {{-- @foreach ($likes as $like)
            <p>{{ $like->user->name }} thich bai nay</p>
        @endforeach --}}

        @if (count($likes))
            @if($post->liked(\Auth::user()->id))
                @if(count($likes) == 1)
                    <p>ban thich bai nay</p>
                @else
                    <p>ban va {{ count($likes)-1 }} nguoi thic bai nay</p>
                @endif
            @else
                <p>{{ count($likes) }} <span> nguoi thic bai nay</span></p>
            @endif
        @else
            <p>chua co ai thich</p>
        @endif
        <br>

        @foreach ($comments as $comment)
            {{  $comment->user->name }}
            {{ $comment->content }}
            <br>
        @endforeach
        
        <form action="{{ route('user.comment', $post) }}" method="GET">
            @csrf
            <input type="text" name="content">
            <button type="submit">comment</button>
        </form>


    </div>
    
@endsection