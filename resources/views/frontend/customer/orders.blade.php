@extends('layouts.frontendLayout')
@section('title')
My Orders
@endsection
@section('content')
<div class="container-xxl grow container-p-y">
    <div class="row">

        <!-- Left: Navigation -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100 nav-card">
                <div class="card-header">
                    <h5 class="card-title m-0">Navigation</h5>
                </div>
                <div class="card-body p-0">
                    <div class="dash-nav-list">
                        <a href="{{ route('customer.dashboard') }}"
                           class="dash-nav-item {{ request()->routeIs('customer.dashboard') ? 'active' : '' }}">
                            <i class="bx bxs-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('customer.orders') }}"
                           class="dash-nav-item {{ request()->routeIs('customer.orders') ? 'active' : '' }}">
                            <i class="bx bx-refresh"></i>
                            <span>Order History</span>
                        </a>
                        <a href="{{ route('customer.wishlist') }}"
                           class="dash-nav-item {{ request()->routeIs('customer.wishlist') ? 'active' : '' }}">
                            <i class="bx bx-heart"></i>
                            <span>Wishlist</span>
                        </a>

                        {{-- No cart route defined yet in web.php — shown disabled so it doesn't break the page --}}
                        <span class="dash-nav-item disabled" title="Coming soon">
                            <i class="bx bx-lock-alt"></i>
                            <span>Shopping Cart</span>
                        </span>

                        <a href="{{ route('customer.settings') }}"
                           class="dash-nav-item {{ request()->routeIs('customer.settings') ? 'active' : '' }}">
                            <i class="bx bx-cog"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#"
                           class="dash-nav-item dash-nav-logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-log-out"></i>
                            <span>Log-out</span>
                        </a>
                        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
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
