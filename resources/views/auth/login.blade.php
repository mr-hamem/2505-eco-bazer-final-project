@extends('layouts.frontendLayout')
@section('title')
Login
@endsection
@section('content')

<section id="login">
    <div class="container">
        <div class="row align-itme-center justify-content-center">
            <div class="login-box">
                <h2>Sign In</h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group password-group">
                        <input type="password" placeholder="Password" name="password">
                        <iconify-icon class="eye" icon="iconoir:eye" width="24" height="24"></iconify-icon>
                    </div>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <label>
                        <input class="remember text-start" name="remember" type="checkbox"> Remember me
                    </label>
                    <a href="#" class="forgetPass text-end">Forget Password</a>

                    <button type="submit" class="login-btn">Login</button>

                    <p class="login-text text-center"><a href="./signup.html">
                            Don’t have account? <b> Register </b></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
