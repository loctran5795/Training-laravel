@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="postBox">
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
    </div>

@endsection