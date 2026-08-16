@extends('layouts.customerLayout')

@section('title', 'Wishlist')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">My Wishlist</h5>
                </div>
                <div class="card-body">
                    <div class="text-center py-5">
                        <img src="{{ asset('frontend/img/plant 1.png') }}" alt="No Wishlist" height="100" class="mb-3 opacity-50">
                        <h5 class="text-muted">Your wishlist is empty</h5>
                        <p class="text-muted">Save items you like by clicking the heart icon on products.</p>
                        <a href="{{ route('frontend.shop') }}" class="btn btn-primary">Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
