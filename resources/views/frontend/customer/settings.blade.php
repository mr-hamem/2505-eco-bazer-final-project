@extends('layouts.customerLayout')

@section('title', 'Settings')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Account Settings</h5>
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
                    <h5 class="card-title m-0">Preferences</h5>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                        <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="smsNotifications">
                        <label class="form-check-label" for="smsNotifications">SMS Notifications</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="orderUpdates" checked>
                        <label class="form-check-label" for="orderUpdates">Order Updates</label>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0 text-danger">Danger Zone</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Once you delete your account, there is no going back. Please be certain.</p>
                    <button type="button" class="btn btn-outline-danger">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
