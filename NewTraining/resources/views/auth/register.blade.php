@extends('layouts.app')

@section('content')
<div class="page">
    <div class="loginBox">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="">Username</label>
            <input type="text" name="name" class="formLogin" placehoder="Enter Username...">
            <label for="">Email</label>
            <input type="email" name="email" class="formLogin" placehoder="Enter Email...">
            <label for="">Password</label>
            <input type="password" name="password" class="formLogin" placehoder="Enter Password...">
            <label for="">Confirm Password</label>
            <input type="password" class="formLogin" name="password_confirmation" placehoder="Enter Password...">
            <button type="submit">
                {{ __('Register') }}
            </button>
        </form>
        <div class="back">
            <p><a href="http://localhost:8000/login">Back</a></p>
        </div>
    </div>
</div>                         
@endsection
