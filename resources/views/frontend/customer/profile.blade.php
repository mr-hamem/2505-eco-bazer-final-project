@extends('layouts.customerLayout')

@section('title', 'My Profile')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5 order-1">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{ asset('frontend/img/user.png') }}" alt="Avatar"
                            class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;" />
                    </div>
                    <h5 class="card-title mb-1">{{ str()->headline($customer->name) }}</h5>
                    <p class="text-muted mb-3">{{ $customer->email }}</p>
                    <span class="badge bg-label-primary">Customer</span>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-3">Contact Information</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="bx bx-envelope me-2 text-primary"></i> {{ $customer->email }}
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-phone me-2 text-primary"></i> {{ $customer->phone ?? 'Not provided' }}
                        </li>
                        <li class="mb-2">
                            <i class="bx bx-map me-2 text-primary"></i> {{ $customer->address ?? 'Not provided' }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-7 order-2">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Profile Details</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $customer->name }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $customer->email }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" value="{{ $customer->phone ?? '' }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" value="{{ $customer->address ?? '' }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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
@endsection
