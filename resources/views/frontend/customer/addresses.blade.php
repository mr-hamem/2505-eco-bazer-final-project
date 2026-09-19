@extends('layouts.frontendLayout')
@section('title', 'Addresses')
@section('content')
@php
    $customer = $customer ?? auth('cus')->user();
@endphp
<div class="container-xxl grow container-p-y">
    <div class="row">
        <!-- Left: Navigation -->
        <div class="col-lg-3 col-md-4 mb-4">
            @include('layouts.partials.customerDashNav')
        </div>

        <!-- Right: Content -->
        <div class="col-lg-9 col-md-8">

            <!-- Saved Addresses -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Saved Addresses</h5>
                </div>
                <div class="card-body">
                    @if($customer->address)
                        <div class="row g-3">
                            <div class="col-md-6">
                                <p><strong>Street Address</strong></p>
                                <p class="text-muted">{{ $customer->address }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Country / Region</strong></p>
                                <p class="text-muted">{{ $customer->country ?? 'Not provided' }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>State</strong></p>
                                <p class="text-muted">{{ $customer->state ?? 'Not provided' }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Zip Code</strong></p>
                                <p class="text-muted">{{ $customer->zip_code ?? 'Not provided' }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Phone</strong></p>
                                <p class="text-muted">{{ $customer->phone ?? 'Not provided' }}</p>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class="btn btn-outline-success rounded-pill px-4">Edit Address</a>
                    @else
                        <div class="text-center py-5">
                            <img src="{{ asset('frontend/img/plant 1.png') }}" alt="No Addresses" height="100" class="mb-3 opacity-50">
                            <h5 class="text-muted">No addresses saved</h5>
                            <p class="text-muted">You haven't saved any delivery addresses yet.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Add New Address -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Add New Address</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="street_address" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="street_address" name="street_address"
                                       value="{{ old('street_address', $customer->address ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="country" class="form-label">Country / Region</label>
                                <select class="form-select" id="country" name="country">
                                    <option value="">Select country</option>
                                    <option value="Kenya" @selected(old('country', $customer->country ?? '') == 'Kenya')>Kenya</option>
                                    <option value="Bangladesh" @selected(old('country', $customer->country ?? '') == 'Bangladesh')>Bangladesh</option>
                                    <option value="United States" @selected(old('country', $customer->country ?? '') == 'United States')>United States</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="form-label">States</label>
                                <select class="form-select" id="state" name="state">
                                    <option value="">Select state</option>
                                    <option value="Nairobi DC" @selected(old('state', $customer->state ?? '') == 'Nairobi DC')>Nairobi DC</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="zip_code" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code"
                                       value="{{ old('zip_code', $customer->zip_code ?? '') }}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success rounded-pill px-4">Save Address</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- / Content -->

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
.form-label {
    font-size: 14px;
    color: #4b5563;
    margin-bottom: 6px;
}
.form-control, .form-select {
    border-radius: 8px;
    border-color: #e5e7eb;
    padding: 10px 14px;
}
.form-control:focus, .form-select:focus {
    border-color: #00B207;
    box-shadow: 0 0 0 0.15rem rgba(0, 178, 7, 0.15);
}
.btn-success {
    background-color: #00B207;
    border-color: #00B207;
}
.btn-success:hover {
    background-color: #009606;
    border-color: #009606;
}
.btn-outline-success {
    color: #00B207;
    border-color: #00B207;
}
.btn-outline-success:hover {
    background-color: #00B207;
    color: #fff;
}
</style>
@endsection