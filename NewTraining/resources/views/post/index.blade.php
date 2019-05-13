@extends('layouts.app')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    {{--  <div class="postBox">
        <form action="{{ route('post.index') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Image</label>
            <input type="file" name="images">
            <label for="">title</label>
            <input class="formBox" type="text" name="title">
            @if($errors->any())
            <div class="invalid">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
            <label for="">content</label>
            <textarea class="area" type="text" row="5" name="content" placehoder="what do you think....???"></textarea>
            <button class="button" type="submit">Post</button>
        </form>    
    </div>  --}}
<div class="container">
    
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created_at</th>
            <th>Publish</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $key => $post)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->created_at }}</td>
            <td></td>
            <td>
                <a href=""><button>publish</button></a>
                <a href="{{ route('post.edit', $post) }}"><button>edit</button></a>
                <a href="{{ route('post.create', $post) }}"><button>create</button></a>
                <a href="{{ route('post.destroy', $post) }}" onclick="return confirm('Are you sure delete.???')"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection