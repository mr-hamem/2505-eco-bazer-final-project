@extends('layouts.frontendLayout')
@section('title')
My Orders
@endsection
@section('content')
<div class="container-xxl grow container-p-y">
    <div class="row">

        <!-- Left: Navigation -->
        <div class="col-lg-3 col-md-4 mb-4">
            @include('layouts.partials.customerDashNav')
        </div>

        <!-- Right: Order History content -->
        <div class="col-lg-9 col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Order History</h5>
                </div>
                <div class="card-body">

                    @forelse($orders ?? [] as $order)
                        {{-- Replace this block with your real order row/table markup once $orders is available --}}
                    @empty
                        <div class="text-center py-5">
                            <img src="{{ asset('frontend/img/plant 1.png') }}" alt="No Orders" height="100" class="mb-3 opacity-50">
                            <h5 class="text-muted">No orders yet</h5>
                            <p class="text-muted">You haven't placed any orders yet. Start shopping now!</p>
                            <a href="{{ route('frontend.shop') }}" class="btn btn-primary">Browse Products</a>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>

    </div>
</div>

<style>
.nav-card .card-header {
    border-bottom: none;
    padding-bottom: 0;
}
.dash-nav-list {
    display: flex;
    flex-direction: column;
    padding: 8px 0;
}
.dash-nav-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 20px;
    color: #6b7280;
    text-decoration: none;
    font-size: 15px;
    border-left: 3px solid transparent;
    transition: all 0.2s ease;
}
.dash-nav-item i {
    font-size: 20px;
    color: #9ca3af;
    transition: color 0.2s ease;
}
.dash-nav-item:hover,
.dash-nav-item.active {
    background-color: #eaf7ec;
    color: #00B207;
    border-left-color: #00B207;
}
.dash-nav-item:hover i,
.dash-nav-item.active i {
    color: #00B207;
}
.dash-nav-item.disabled {
    cursor: not-allowed;
    opacity: 0.5;
}
.dash-nav-logout {
    margin-top: 8px;
    border-top: 1px solid #f1f2f4;
}
</style>
<!-- / Content -->
@endsection
