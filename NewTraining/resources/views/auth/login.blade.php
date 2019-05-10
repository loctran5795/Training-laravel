@extends('layouts.app')

@section('content')

<!-- <div class="page">
    <div class="loginBox">
        <h2>Sign In</h2>
        <form action="">
            <label for="">Email</label>
            <input class="formLogin" type="email" placehoder="enter email...">
            <label for="">Password</label>
            <input class="formLogin" type="password" placehoder="enter password...">
            <button type="submit">Sign In</button>
        </form>
    </div>
</div> -->
<!-- <div class="page">
    <div class="loginBox">
        <h2>Sign In</h2>
        <form action="">
            <label for="">Email</label>
            <input class="formLogin" type="email" placehoder="enter email...">
            <label for="">Password</label>
            <input class="formLogin" type="password" placehoder="enter password...">
            <button type="submit">Sign In</button>
        </form>
    </div>
</div> -->



<div class="page">
    <div class="loginBox">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="">Email</label>
            <input type="email" name="email" class="formLogin" placehoder="Enter Email...">
            @if($errors->has('email'))
            <div class="invalid">
                {{ $errors->first('email') }}
            </div>
            @endif
            <label for="">Password</label>
            <input type="password" name="password" class="formLogin" placehoder="Enter Password...">
            <button type="submit">
                {{ __('Login') }}
            </button>
        </form>
        <div class="create">
            <h4>Or</h4>
            <a href="http://localhost:8000/register">Create an account</a>
        </div>        
    </div>
</div>



<!-- <div class="page">
    <div class="loginBox">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="">Username</label>
            <input type="text" class="formLogin" placehoder="Enter Username...">
            <label for="">Email</label>
            <input type="email" class="formLogin" placehoder="Enter Email...">
            <label for="">Password</label>
            <input type="password" name="password" class="formLogin" placehoder="Enter Password...">
            <label for="">Confirm Password</label>
            <input type="password" class="formLogin" name="password_confirmation placehoder="Enter Password...">
            <button type="submit">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</div>                          -->
@endsection
