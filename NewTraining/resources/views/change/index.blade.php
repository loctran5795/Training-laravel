@extends('layouts.app')

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="postBox">
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
    </div>

@endsection