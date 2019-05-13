@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>

@endsection