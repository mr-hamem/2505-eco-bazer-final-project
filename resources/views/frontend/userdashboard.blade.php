@extends('layouts.customerLayout')

@section('title', 'Dashboard')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcome back, {{
                                str()->headline($customer->name) }}! 👋</h5>
                            <p class="mb-4" style="color: #96b297;">
                                Explore our latest eco-friendly products and manage your orders from your dashboard.
                            </p>

                            <a href="{{ route('frontend.shop') }}" class="btn btn-sm btn-outline-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('frontend/img/plant 1.png') }}" height="140"
                                alt="Eco Products" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats Cards -->
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png') }}"
                                        alt="Products" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Products</span>
                            <h3 class="card-title mb-2" style="color: #2c742f;">{{ $totalProducts }}</h3>
                            <small class="text-muted fw-semibold">Available in store</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('backend/assets/img/icons/unicons/wallet-info.png') }}"
                                        alt="Categories" class="rounded" />
                                </div>
                            </div>
                            <span>Categories</span>
                            <h3 class="card-title text-nowrap mb-1" style="color: #2c742f;">{{ $totalCategories }}</h3>
                            <small class="text-muted fw-semibold">Product categories</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-12 col-lg-4 order-2 order-md-2 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title m-0 me-2">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('frontend.shop') }}" class="btn btn-outline-primary">
                            <i class="bx bx-shopping-bag me-2"></i> Browse Products
                        </a>
                        <a href="{{ route('customer.orders') }}" class="btn btn-outline-success">
                            <i class="bx bx-package me-2"></i> Track Orders
                        </a>
                        <a href="{{ route('customer.wishlist') }}" class="btn btn-outline-danger">
                            <i class="bx bx-heart me-2"></i> My Wishlist
                        </a>
                        <a href="{{ route('customer.profile') }}" class="btn btn-outline-info">
                            <i class="bx bx-user me-2"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="col-12 col-lg-8 order-3 order-md-3 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Featured Products</h5>
                    <a href="{{ route('frontend.shop') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach($featuredProducts as $product)
                        <div class="col-md-4 col-6">
                            <div class="card h-100 product-card">
                                <div class="card-body text-center">
                                    <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}"
                                        class="img-fluid mb-2" style="height: 120px; object-fit: contain;">
                                    <h6 class="card-title text-truncate">{{ $product->title }}</h6>
                                    <p class="text-primary fw-bold mb-1">${{ $product->selling_price ?? $product->price }}</p>
                                    <small class="text-muted">
                                        @if($product->stock > 0)
                                        <span class="text-success">In Stock</span>
                                        @else
                                        <span class="text-danger">Out of Stock</span>
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Products -->
        <div class="col-12 col-lg-8 order-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Latest Products</h5>
                    <a href="{{ route('frontend.shop') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentProducts as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}"
                                                class="rounded me-2" style="width: 40px; height: 40px; object-fit: contain;">
                                            <span class="fw-semibold">{{ $product->title }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $product->category->title ?? 'N/A' }}</td>
                                    <td>${{ $product->selling_price ?? $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        @if($product->status == 1)
                                        <span class="badge bg-label-success">Active</span>
                                        @else
                                        <span class="badge bg-label-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Summary -->
        <div class="col-12 col-lg-4 order-5 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title m-0 me-2">Account Summary</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{ asset('frontend/img/user.png') }}" alt="User"
                                class="rounded-circle" style="width: 50px; height: 50px;" />
                        </div>
                        <div>
                            <h6 class="mb-0">{{ str()->headline($customer->name) }}</h6>
                            <small class="text-muted">{{ $customer->email }}</small>
                        </div>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="bx bx-phone me-2"></i> {{ $customer->phone ?? 'Not provided' }}
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-map me-2"></i> {{ $customer->address ?? 'Not provided' }}
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-calendar me-2"></i> Member since {{ $customer->created_at->format('M Y') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<style>
.product-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>
@endsection
