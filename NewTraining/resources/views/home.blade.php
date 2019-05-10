@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{-- <form action="{{ route('user.sent') }}" method="POST">
        @csrf
        <but`ton type="submit">test</button>
    </form> --}}

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <button type="submit">click</button>
    </form>

   
    {{-- <div class="postBox">
    <form action="{{ route('user.createPost') }}" method="POST" enctype="multipart/form-data">
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
    </div> --}}
    {{-- <div class="postBox">
         <form action="{{ route('user.test') }}" method="POST">
            @csrf
            <input type="text" name="ten">
            <input type="text" name="noidung">
            <button type="submit">click</button>
        </form> 

         <form action="{{ route('user.comment') }}" method="POST">
            @csrf
            <input type="text" name="content">
            <button type="submit">comment</button>
        </form> 

    </div> --}}
    {{-- <div>
         {{ \Auth::user()->posts()->get() }} 
         @foreach ($posts as $post)
            {{ $post->title }}
            {{ $post->user_id }}
            {{ $post->created_at->format('d/m/Y h:i') }}
            {{ $post->content }} <br>
        @endforeach 
    </div> --}}
    {{-- <div class="postBox">
        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">avatar</label>
            <input type="file" name="images">
            <br>
            <label for="">name</label>
            <input class="formBox" type="text" name="name" value="{{ \Auth::user()->name }}">
            @if($errors->any())
            <div class="invalid">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
            <label for="">Email</label>
            <input class="formBox" type="email" name="email" value="{{ \Auth::user()->email }}">         
            <button class="button" type="submit">update</button>
        </form>
    </div> --}}

    {{-- <div class="postBox">
        <form action="{{ route('user.change') }}" method="POST">
            @csrf
            <label for="">Current Password</label>
            <input class="formBox" type="password" name="password">
            <label for="">New Password</label>
            <input class="formBox" type="password" name="new_password">
            @if($errors->any())
            <div class="invalid">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
            @endif
            <label for="">Confirm New Password</label>
            <input class="formBox" type="password" name="confirm_new_password">
            <button class="button" type="submit">Change</button>
        </form>
    </div> --}}

    {{-- <div class="postBox">
        <form action="{{ route('user.change') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Current Password</label>
                <input type="password" class="formBox form-control {{ $errors->has('old_password') ? 'is-invalid' : '' }}" name="old_password">
                @if($errors->has('old_password'))
                <div class="invalid-feedback">{{ $errors->first('old_password') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="">New Password</label>
                <input type="password" name="password" class="formBox form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                @if($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" class="formBox form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            <div class="box-footer">
                <button class="button btn btn-primary">Change</button>
            </div>
        </form>
    </div> --}}

    <div>
        @foreach ($posts as $post)
            <a href="{{ route('post.show', $post) }}" target="_blank"><p>Title: {{ $post->title }} </p></a>
            {{--  <p.>Content: {{ $post->content }} </p>  --}}
            <img src="{{ $post->image_post }}" style="width:400px" alt="">
            {{--  <form action="{{ route('user.comment', $post) }}" method="GET">
                @csrf
                <input type="text" name="content">
                <button type="submit">comment</button>
            </form>  --}}
        @endforeach
    </div>
    
    
    
                
@endsection
