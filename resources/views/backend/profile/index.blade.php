@extends('layouts.backend')

@section('title', 'My Profile')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-5">
    <style>
        .profile-page .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .profile-page .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
        }
        .profile-page .card-header {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border: none;
            padding: 1.5rem 1.5rem;
        }
        .profile-page .card-header h4,
        .profile-page .card-header span {
            color: #f8fafc !important;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .profile-page .card-header i {
            font-size: 1.3rem;
            margin-right: 10px;
            color: #38bdf8;
        }
        .profile-page .card-body {
            background-color: #ffffff;
        }
        .profile-page .form-label {
            font-weight: 500;
            color: #334155;
            font-size: 0.92rem;
        }
        .profile-page .form-control {
            border-radius: 10px;
            border: 1.5px solid #e2e8f0;
            padding: 0.65rem 0.9rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .profile-page .form-control:focus {
            border-color: #1e293b;
            box-shadow: 0 0 0 0.2rem rgba(30, 41, 59, 0.1);
        }
        .profile-page .form-control[readonly] {
            background-color: #f8fafc;
            color: #64748b;
        }
        .profile-page .form-text {
            font-size: 0.8rem;
            color: #94a3b8;
        }
        .profile-page .avatar-wrapper {
            position: relative;
            width: 90px;
            height: 90px;
            margin: 0 auto 1rem;
        }
        .profile-page .avatar-wrapper img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f1f5f9;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .profile-page .btn-profile-primary {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border: none;
            color: #fff;
            font-weight: 500;
            padding: 0.65rem 1rem;
            border-radius: 10px;
            transition: opacity 0.2s ease, transform 0.15s ease;
        }
        .profile-page .btn-profile-primary:hover {
            opacity: 0.92;
            transform: translateY(-1px);
            color: #fff;
        }
    </style>

    <div class="row justify-content-center g-4 profile-page">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary ">
                    <h4 class="mb-0 text-white"><i class="bi bi-person-circle"></i>Update Profile</h4>
                </div>
                <div class="card-body py-4 px-4">
                    <form id="profileUpdateForm"  action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch ')
                        <div class="mb-4 text-center">
                            <div class="avatar-wrapper">
                                <img  src="{{ getProfileImg() }}" style="width: 40px;height:40px;border-radius: 50%; display:block"/>
                            </div>
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
                            <button type="submit" class="btn btn-profile-primary">Save Changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary">
                    <span class="text-white"><i class="bi bi-shield-lock"></i>Change Password</span>
                </div>
                <div class="card-body py-4 px-4">
                    <form action="">

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
                        <button class="btn btn-profile-primary">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
  ({
        
        // Remove password error text dynamically
        passwordConfirm.addEventListener('input', function() {
            if (password.value === passwordConfirm.value) {
                passwordError.classList.add('d-none');
            }
        });
    });
</script>
@endpush
@endsection