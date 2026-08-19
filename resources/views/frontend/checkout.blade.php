@extends('layouts.frontendLayout')
@section('title')
Checkout
@endsection
@section('content')

<div class="container checkout-page py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Secure Checkout</h2>
        <p class="text-muted">Complete your billing details below to finish your order.</p>
    </div>

    <div class="row g-4">

        <!-- Billing Form -->
        <div class="col-lg-8 order-2 order-lg-1">
            <div class="card checkout-card">
                <div class="card-header">
                    <h5 class="card-title m-0">Billing Address</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="customer_name" class="form-label">Full name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name"
                                   value="{{ auth('customer')->user()?->name }}" required>
                            <div class="invalid-feedback">Valid customer name is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="mobile" class="form-label">Mobile</label>
                            <div class="input-group">
                                <span class="input-group-text">+88</span>
                                <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                                       value="{{ auth('customer')->user()?->phone }}" required>
                                <div class="invalid-feedback">Your mobile number is required.</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email <span class="text-muted fw-normal">(Optional)</span></label>
                            <input type="email" name="customer_email" class="form-control" id="email"
                                   placeholder="you@example.com" value="{{ auth('customer')->user()?->email }}">
                            <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                   value="{{ auth('customer')->user()?->address }}" required>
                            <div class="invalid-feedback">Please enter your shipping address.</div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Address 2 <span class="text-muted fw-normal">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required>
                                <option selected value="Bangladesh">Bangladesh</option>
                            </select>
                            <div class="invalid-feedback">Please select a valid country.</div>
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" required>
                                <option value="">Choose...</option>
                                <option value="Dhaka">Dhaka</option>
                            </select>
                            <div class="invalid-feedback">Please provide a valid state.</div>
                        </div>
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" required>
                            <div class="invalid-feedback">Zip code required.</div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <input type="hidden" value="1200" name="amount" id="total_amount" required />
                        <label class="form-check-label" for="same-address">
                            Shipping address is the same as my billing address
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">
                            Save this information for next time
                        </label>
                    </div>

                    <button class="btn btn-success btn-lg w-100 rounded-pill" id="sslczPayBtn"
                            token="if you have any token validation"
                            postdata="your javascript arrays or objects which requires in backend"
                            order="If you already have the transaction generated for current order"
                            endpoint="{{ url('/pay-via-ajax') }}">
                        Pay Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="card checkout-card cart-summary-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0">Your Cart</h5>
                    <span class="badge cart-count-badge">{{ count($carts) }}</span>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        @php $total = 0; @endphp
                        @foreach ($carts as $cart)
                            @php
                                $subTotal = ($cart->product->selling_price ?? $cart->product->price) * $cart->qty;
                                $total += $subTotal;
                            @endphp
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-0">{{ $cart->product->title }}</h6>
                                    <small class="text-muted">
                                        {{ $cart->product->selling_price ?? $cart->product->price }} &times; {{ $cart->qty }}
                                    </small>
                                </div>
                                <span class="fw-semibold text-nowrap">{{ $subTotal }} BDT</span>
                            </li>
                        @endforeach

                        <li class="list-group-item d-flex justify-content-between align-items-center cart-total-row">
                            <span class="fw-semibold">Total (BDT)</span>
                            <strong>{{ $total }} TK</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
.checkout-page .form-label {
    font-size: 14px;
    color: #4b5563;
    margin-bottom: 6px;
}
.checkout-card {
    border-radius: 12px;
    border: 1px solid #eef0f2;
}
.checkout-card .card-header {
    background-color: #fff;
    border-bottom: 1px solid #f1f2f4;
}
.form-control, .form-select, .input-group-text {
    border-radius: 8px;
    border-color: #e5e7eb;
    padding: 10px 14px;
}
.form-control:focus, .form-select:focus {
    border-color: #00B207;
    box-shadow: 0 0 0 0.15rem rgba(0, 178, 7, 0.15);
}
.form-check-input:checked {
    background-color: #00B207;
    border-color: #00B207;
}
.btn-success {
    background-color: #00B207;
    border-color: #00B207;
}
.btn-success:hover {
    background-color: #009606;
    border-color: #009606;
}
#sslczPayBtn {
    background: linear-gradient(135deg, #00B207 0%, #007a05 100%);
    border: none;
    box-shadow: 0 6px 16px rgba(0, 178, 7, 0.35);
    font-weight: 600;
    letter-spacing: 0.3px;
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}
#sslczPayBtn:hover {
    background: linear-gradient(135deg, #009606 0%, #006404 100%);
    box-shadow: 0 8px 20px rgba(0, 178, 7, 0.45);
    transform: translateY(-1px);
}
#sslczPayBtn:active {
    transform: translateY(0);
    box-shadow: 0 4px 10px rgba(0, 178, 7, 0.35);
}
/* Hide the SSLCommerz sandbox script's injected blue logo badge on the Pay button.
   The exact class/tag name is generated by their embed.min.js script, so this targets
   the most common patterns. If it doesn't disappear, inspect the badge element in
   DevTools and swap in the real selector here. */
#sslczPayBtn img,
#sslczPayBtn svg,
#sslczPayBtn .sslcz-icon,
#sslczPayBtn > span:first-child:not(:only-child) {
    display: none !important;
}
.cart-count-badge {
    background-color: #eaf7ec;
    color: #00B207;
    font-weight: 600;
}
.cart-summary-card .list-group-item {
    padding: 14px 20px;
}
.cart-total-row {
    background-color: #eaf7ec;
}
.cart-total-row strong {
    color: #00B207;
    font-size: 1.05rem;
}
</style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $('#sslczPayBtn').click(function () {
        var obj = {};
        obj.cus_name = $('#customer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.total = `{{ $total }}`;
        $('#sslczPayBtn').prop('postdata', obj);
    })
</script>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

@endsection