@extends('layouts.frontendLayout')
@section('title', 'Sign In')
@section('content')

<section id="login">
    <div class="container">
        <div class="row align-itme-center justify-content-center">
            <div class="login-box">
                <h2>Sign In</h2>

                <form action="{{ route('customer.signin') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email">
                    </div>

                    <div class="input-group password-group">
                        <input name="password" type="password" placeholder="Password">
                        <iconify-icon class="eye" icon="iconoir:eye" width="24" height="24"></iconify-icon>
                    </div>

                    <label>
                        <input class="remember text-start" type="checkbox"> Remember me
                    </label>
                    <a href="#" class="forgetPass text-end">Forget Password</a>

                    <button class="login-btn">Login</button>

                    <a href="{{ route('customer.google') }}">
                        <img src="https://i.sstatic.net/4LSMF.png" alt="" class="img-fluid">
                    </a>
                    <a href="">
                        <img src="https://cdn.sanity.io/images/061o94fn/production/4e3e8e3c202274f605ddace0cc0b9841baf0efc5-698x264.jpg" alt="Github Login" class="img-fluid">
                    </a>
                    <p class="login-text text-center"><a href="{{ route('customer.signup') }}">
                            Don’t have account? <b> Register </b></a>
                    </p>    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection