@extends('layouts.frontendLayout')

@section('title')
Oops! Page Not Found - Ecobazar
@endsection

@section('content')
<div class="py-4 text-white" style="background: url('{{ asset('frontend/img/about-banner.png') }}') no-repeat center center/cover; background-color: #1a1a1a;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 align-items-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active text-success fw-medium" aria-current="page" style="color: #00b207 !important;">pages</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5 my-5 text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <img src="{{ asset('frontend/img/404-error.png') }}" alt="404 Page Not Found" class="img-fluid mb-4" style="max-height: 280px;">
                
                <h2 class="fw-bold text-dark mb-3" style="font-family: 'Poppins', sans-serif; font-size: 2.2rem; letter-spacing: -0.5px;">Oops! page not found</h2>
                
                <p class="text-muted small lh-lg mx-auto mb-4" style="max-width: 520px;">
                    Ut consequat ac tortor eu vehicula. Aenean accumsan purus eros. Maecenas sagittis tortor at metus mollis.
                </p>
                
                <a href="{{ url('/') }}" class="btn btn-success px-4 py-2 fw-medium rounded-pill border-0 text-white shadow-none" style="background-color: #00b207; font-size: 0.9rem;">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<div class="py-4" style="background-color: #f7f7f7; border-top: 1px solid #eaeaea;">
    <div class="container">
        <div class="row align-items-center g-3">
            
            <div class="col-lg-4 text-center text-lg-start">
                <h5 class="fw-bold text-dark mb-1" style="font-family: 'Poppins', sans-serif;">Subcribe our Newsletter</h5>
                <p class="text-muted small mb-0 lh-base" style="font-size: 0.82rem;">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna.</p>
            </div>
            
            <div class="col-lg-5">
                <form action="#" method="POST" class="d-flex w-100 position-relative">
                    <input type="email" class="form-control rounded-pill px-4 py-2 border bg-white shadow-none text-muted w-100" placeholder="Your email address" style="font-size: 0.88rem; height: 46px; border-color: #e0e0e0;">
                    <button type="submit" class="btn btn-success rounded-pill px-4 py-2 position-absolute end-0 top-0 h-100 border-0 fw-medium text-white" style="background-color: #00b207; font-size: 0.88rem;">
                        Subscribe
                    </button>
                </form>
            </div>
            
            <div class="col-lg-3 text-center text-lg-end">
                <div class="d-inline-flex gap-2">
                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none rounded-circle text-white" style="background-color: #00b207; width: 34px; height: 34px;"><i class="bx bxl-facebook fs-5"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none rounded-circle text-dark hover-icon-bg" style="width: 34px; height: 34px;"><i class="bx bxl-twitter fs-5"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none rounded-circle text-dark hover-icon-bg" style="width: 34px; height: 34px;"><i class="bx bxl-pinterest-alt fs-5"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none rounded-circle text-dark hover-icon-bg" style="width: 34px; height: 34px;"><i class="bx bxl-instagram fs-5"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<style>
    /* Secondary Icon Hover Transitions styling */
    .hover-icon-bg:hover {
        background-color: #eaeaea;
        transition: background-color 0.2s ease;
    }
</style>
@endsection