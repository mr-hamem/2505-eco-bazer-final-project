@extends('layouts.frontendLayout')

@section('title', 'Order Summary')

@section('content')
@php
    $subtotal = $carts->sum(fn ($cart) => (($cart->product?->selling_price ?? $cart->product?->price ?? 0) * $cart->qty));
    $total = $subtotal + $deliveryCharge;
@endphp

<div class="container py-5 order-summary-page">
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Order Summary</h2>
        <p class="text-muted mb-0">Review your items before placing the order.</p>
    </div>

    @if ($carts->isEmpty())
        <div class="card border-0 shadow-sm text-center p-5">
            <h5>Your cart is empty</h5>
            <p class="text-muted">Add products to your cart before placing an order.</p>
            <a href="{{ route('frontend.shop') }}" class="btn btn-success align-self-center px-4">Continue Shopping</a>
        </div>
    @else
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card order-card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Items in your order ({{ $carts->sum('qty') }})</h5>
                    </div>
                    <div class="card-body p-0">
                        @foreach ($carts as $cart)
                            @php
                                $product = $cart->product;
                                $unitPrice = $product?->selling_price ?? $product?->price ?? 0;
                                $lineTotal = $unitPrice * $cart->qty;
                            @endphp
                            <div class="order-item p-3 p-md-4">
                                <div class="row align-items-center g-3">
                                    <div class="col-3 col-md-2">
                                        <img src="{{ getImage($product?->image) }}" alt="{{ $product?->title }}" class="img-fluid rounded order-product-image">
                                    </div>
                                    <div class="col-9 col-md-4">
                                        <h6 class="mb-1">{{ $product?->title ?? 'Product unavailable' }}</h6>
                                        @if (filled($product?->color))
                                            <small class="text-muted d-block">Color: {{ $product->color }}</small>
                                        @endif
                                        <small class="text-muted">Unit: {{ $product?->units ?? 'N/A' }}</small>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <small class="text-muted d-block">Quantity</small>
                                        <span class="fw-semibold">{{ $cart->qty }}</span>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <small class="text-muted d-block">Unit price</small>
                                        <span class="fw-semibold">?{{ number_format($unitPrice, 2) }}</span>
                                    </div>
                                    <div class="col-12 col-md-2 text-md-end">
                                        <small class="text-muted d-block">Total</small>
                                        <span class="fw-bold text-success">?{{ number_format($lineTotal, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card order-card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Payment Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span>?{{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Delivery charge</span>
                            <span>{{ $deliveryCharge > 0 ? '?' . number_format($deliveryCharge, 2) : 'Free' }}</span>
                        </div>
                        <div class="d-flex justify-content-between border-top pt-3 mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="fw-bold text-success fs-5">?{{ number_format($total, 2) }}</span>
                        </div>
                        <button type="button" class="btn btn-success w-100 py-2" title="Payment integration will be added next">Order Now</button>
                        <a href="{{ route('frontend.shop') }}" class="btn btn-outline-success w-100 mt-2">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<style>
.order-summary-page { min-height: 55vh; }
.order-card { border-radius: 12px; overflow: hidden; }
.order-card .card-header { border-bottom: 1px solid #edf0ed; }
.order-item + .order-item { border-top: 1px solid #edf0ed; }
.order-product-image { width: 76px; height: 76px; object-fit: cover; background: #f6f7f6; }
.btn-success { background-color: #00B207; border-color: #00B207; }
.btn-success:hover { background-color: #009606; border-color: #009606; }
.btn-outline-success { color: #00B207; border-color: #00B207; }
.btn-outline-success:hover { background-color: #00B207; border-color: #00B207; }
</style>
@endsection
