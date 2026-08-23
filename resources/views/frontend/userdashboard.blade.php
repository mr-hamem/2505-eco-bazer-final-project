@extends('layouts.frontendLayout')
@section('title')
Dashboard
@endsection
@section('content')
@php
    // Falls back to the logged-in customer if the controller didn't pass $customer explicitly
    $customer = $customer ?? auth('cus')->user();
@endphp
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

        <!-- Right: Profile + Billing + Orders -->
        <div class="col-lg-9 col-md-8">
            <div class="row">
                <!-- Profile Card -->
                <div class="col-md-5 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ $customer->image ? getImage($customer->image) : asset('frontend/img/user.png') }}"
                                 alt="{{ $customer->name }}"
                                 class="rounded-circle mb-3"
                                 style="width: 90px; height: 90px; object-fit: cover;" />
                            <h6 class="mb-0">{{ str()->headline($customer->name) }}</h6>
                            <small class="text-muted d-block mb-2">Customer</small>
                            <a href="{{ route('customer.profile') }}" class="text-decoration-none fw-semibold" style="color: #00B207;">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Billing Address Card -->
                <div class="col-md-7 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <small class="text-muted text-uppercase" style="letter-spacing: .5px;">Billing Address</small>
                            <h6 class="mt-2 mb-2">{{ str()->headline($customer->name) }}</h6>
                            <p class="mb-1 text-muted">
                                {{ $customer->address ?? 'Not provided' }}
                                @if($customer->zip_code)
                                    <br>{{ $customer->zip_code }}
                                @endif
                            </p>
                            <p class="mb-1">{{ $customer->email }}</p>
                            <p class="mb-2">{{ $customer->phone ?? 'Not provided' }}</p>
                            <a href="{{ route('customer.addresses') }}" class="text-decoration-none fw-semibold" style="color: #00B207;">
                                Edit Address
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recent Order History -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Recent Order History</h5>
                            <a href="{{ route('customer.orders') }}" class="text-decoration-none fw-semibold" style="color: #00B207;">
                                View All
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($recentOrders ?? [] as $order)
                                        <tr>
                                            <td class="fw-semibold">#{{ $order->id }}</td>
                                            <td>{{ $order->created_at->format('j M, Y') }}</td>
                                            <td>
                                                <span class="fw-semibold">${{ number_format($order->total, 2) }}</span>
                                                <span class="text-muted">({{ $order->items_count }} {{ Str::plural('Product', $order->items_count) }})</span>
                                            </td>
                                            <td>{{ ucfirst($order->status) }}</td>
                                            <td>
                                                {{-- No single-order-details route defined yet, so this points to the orders list --}}
                                                <a href="{{ route('customer.orders') }}"
                                                   class="text-decoration-none fw-semibold" style="color: #00B207;">
                                                    View Details
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-4">No orders yet.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
@endsection
