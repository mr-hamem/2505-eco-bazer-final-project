@extends('layouts.frontendLayout')
@section('title')
My Profile
@endsection
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

        <!-- Right: Profile content -->
        <div class="col-lg-9 col-md-8">

            <!-- Profile Info -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Profile Information</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4 align-items-start">
                            <div class="col-md-7">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                               value="{{ old('first_name', $customer->first_name ?? explode(' ', $customer->name)[0] ?? '') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                               value="{{ old('last_name', $customer->last_name ?? '') }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{ old('email', $customer->email) }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               value="{{ old('phone', $customer->phone ?? '') }}">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success rounded-pill px-4">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 text-center">
                                <img src="{{ $customer->image ? getImage($customer->image) : asset('frontend/img/user.png') }}"
                                     alt="{{ $customer->name }}"
                                     class="rounded-circle mb-3"
                                     style="width: 140px; height: 140px; object-fit: cover;">
                                <div>
                                    <label for="profile_image" class="btn btn-outline-success rounded-pill px-4">
                                        Chose Image
                                    </label>
                                    <input type="file" id="profile_image" name="image" class="d-none">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Contact Information</h5>
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
                                <button type="submit" class="btn btn-success rounded-pill px-4">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Account Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Account Information</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Member Since</label>
                            <p class="form-control-static">{{ $customer->created_at->format('F d, Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Account Status</label>
                            <p class="form-control-static">
                                <span class="badge bg-label-success">Active</span>
                            </p>
                        </div>
                    </div>
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