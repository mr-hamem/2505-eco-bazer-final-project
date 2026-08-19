@extends('layouts.frontendLayout')
@section('title')
My Settings
@endsection
@section('content')
@php
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

        <!-- Right: Settings content -->
        <div class="col-lg-9 col-md-8">

            <!-- Account Settings -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Account Settings</h5>
                </div>
                <div class="card-body">
                    {{-- TODO: point action at your profile-update POST route once it exists --}}
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

            <!-- Billing Address -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Billing Address</h5>
                </div>
                <div class="card-body">
                    {{-- TODO: point action at your customer.addresses update POST route once it exists --}}
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="billing_first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="billing_first_name" name="billing_first_name"
                                       value="{{ old('billing_first_name', $customer->first_name ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="billing_last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="billing_last_name" name="billing_last_name"
                                       value="{{ old('billing_last_name', $customer->last_name ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label for="company_name" class="form-label">Company Name <span class="text-muted fw-normal">(optional)</span></label>
                                <input type="text" class="form-control" id="company_name" name="company_name"
                                       value="{{ old('company_name', $customer->company_name ?? '') }}">
                            </div>
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
                            <div class="col-md-6">
                                <label for="billing_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="billing_email" name="billing_email"
                                       value="{{ old('billing_email', $customer->email) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="billing_phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="billing_phone" name="billing_phone"
                                       value="{{ old('billing_phone', $customer->phone ?? '') }}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success rounded-pill px-4">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Change Password -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Change Password</h5>
                </div>
                <div class="card-body">
                    {{-- TODO: point action at your password-update POST route once it exists --}}
                    <form action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="current_password" class="form-label">Current Password</label>
                                <div class="input-group password-field">
                                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Password">
                                    <span class="password-toggle" data-target="current_password">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="new_password" class="form-label">New Password</label>
                                <div class="input-group password-field">
                                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password">
                                    <span class="password-toggle" data-target="new_password">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                <div class="input-group password-field">
                                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Password">
                                    <span class="password-toggle" data-target="new_password_confirmation">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success rounded-pill px-4">Change Password</button>
                            </div>
                        </div>
                    </form>
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

/* Settings forms */
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
.password-field {
    position: relative;
}
.password-field .form-control {
    padding-right: 40px;
}
.password-toggle {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #9ca3af;
    z-index: 5;
}
.password-toggle:hover {
    color: #6b7280;
}
</style>

<script>
document.querySelectorAll('.password-toggle').forEach(function (toggle) {
    toggle.addEventListener('click', function () {
        var input = document.getElementById(toggle.dataset.target);
        var icon = toggle.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bx-show');
            icon.classList.add('bx-hide');
        } else {
            input.type = 'password';
            icon.classList.remove('bx-hide');
            icon.classList.add('bx-show');
        }
    });
});
</script>
<!-- / Content -->
@endsection
