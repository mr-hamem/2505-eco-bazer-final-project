@extends('layouts.customerLayout')

@section('title', 'My Orders')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Order History</h5>
                </div>
                <div class="card-body">
                    <div class="text-center py-5">
                        <img src="{{ asset('frontend/img/plant 1.png') }}" alt="No Orders" height="100" class="mb-3 opacity-50">
                        <h5 class="text-muted">No orders yet</h5>
                        <p class="text-muted">You haven't placed any orders yet. Start shopping now!</p>
                        <a href="{{ route('frontend.shop') }}" class="btn btn-primary">Browse Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
