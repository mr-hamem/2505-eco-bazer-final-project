@extends('layouts.backend')

@section('title', 'Profile Settings')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary ">
                    <h4 class="mb-0 text-white">Update Profile</h4>
                </div>
                <div class="card-body py-4">
                    <form id="profileUpdateForm" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <img src="{{ getProfileImg() }}" style="width: 40px;height:40px;border-radius: 50%; display:block" />
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
                    <form action="{{ route('admin.update.password') }}" method="POST" id="passwordChangeForm">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="old_password" name="old_password"
                                placeholder="Enter current password">
                            @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter New Password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm New Password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');
        const passwordError = document.getElementById('passwordError');

        function validatePasswords() {
            if (passwordInput.value !== passwordConfirmInput.value) {
                passwordError.classList.remove('d-none');
            } else {
                passwordError.classList.add('d-none');
            }
        }

        passwordInput.addEventListener('input', validatePasswords);
        passwordConfirmInput.addEventListener('input', validatePasswords);
    });
</script>
@endpush
@endsection