@extends('layouts.backend')

@section('title', 'My Profile')

@section('content')

<div class="container mt-5 bg-light p-4 rounded shadow-sm">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary ">
                    <h4 class="mb-0 text-white">Update Profile</h4>
                </div>
                <div class="card-body py-4">
                    <form id="profileUpdateForm"  action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch ')
                        <img  src="{{ getProfileImg() }}" style="width: 40px;height:40px;border-radius: 50%; display:block"/>
                        <div class="mb-4 text-center">
                            <label for="profile_img" class="form-label d-block text-start">Profile Image</label>
                            <input type="file" class="form-control" id="profile_img" name="profile_img"
                                accept="image/png, image/jpeg, image/jpg, image/webp">
                            <div class="form-text text-start">Recommended: Square image (JPG, PNG, WEBP).</div>
                            @error('profile_img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" value="{{ auth()->user()->name }}" class="form-control" id="name" name="name" placeholder="John Doe"
                                required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="john@example.com" readonly value="{{ auth()->user()->email }}">
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>



                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="old_password" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="old_password" name="old_password"
                                placeholder="Enter your current password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Min. 8 characters">
                        </div>

                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                                placeholder="Re-type new password">
                            <div class="text-danger small mt-1 d-none" id="passwordError">
                                Passwords do not match.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password_confirm');
    const passwordError = document.getElementById('passwordError');

    passwordConfirmInput.addEventListener('input', function() {
        if (passwordInput.value !== passwordConfirmInput.value) {
            passwordError.classList.remove('d-none');
        } else {
            passwordError.classList.add('d-none');
        }
    });
</script>
@endpush
@endsection