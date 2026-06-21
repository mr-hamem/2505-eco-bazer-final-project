@extends('layouts.frontendLayout')
@section('title')
Admin Register
@endsection
@section('content')
<section id="register">
    <div class="container">
        <div class="row align-item-center">
            <div class="form-wrapper">
                <div class="card">
                    <h2 class="text-center">Create Account</h2>

                    <form>
                        <div class="input-group">
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="input-group password-box">
                            <input type="password" placeholder="Password">
                            <iconify-icon class="eye" icon="iconoir:eye" width="24" height="24"></iconify-icon>
                        </div>

                        <div class="input-group password-box">
                            <input type="password" placeholder="Confirm Password">
                            <iconify-icon class="eye" icon="iconoir:eye" width="24" height="24"></iconify-icon>
                        </div>

                        <div class="terms">
                            <input type="checkbox">
                            <label>Accept all terms & Condition</label>
                        </div>

                        <button class="login-btn" type="submit">Create Account</button>

                        <p class="login-text text-center"><a href="./signin.html">
                                Already have account <b> Login </b></a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection