@extends('layouts.backend')

@section('title', 'My Account - Ecobazar')

@section('content')

<style>
    .eco-bg-primary { background-color: #00B207 !important; color: #ffffff !important; }
    .eco-text-primary { color: #00B207 !important; }
    .eco-btn-primary { background-color: #00B207 !important; border-color: #00B207 !important; color: #ffffff !important; transition: all 0.3s ease; }
    .eco-btn-primary:hover { background-color: #2C742F !important; border-color: #2C742F !important; color: #ffffff !important; }
    .eco-btn-outline { border: 1px solid #00B207 !important; color: #00B207 !important; background: transparent; }
    .eco-btn-outline:hover { background-color: #00B207 !important; color: #ffffff !important; }
    .card { border: 1px solid #E6E6E6 !important; border-radius: 8px !important; }
    .card-header { background-color: #F2F2F2 !important; border-bottom: 1px solid #E6E6E6 !important; font-weight: 600; color: #1A1A1A; }
    .avatar-preview { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; border: 3px solid #F2F2F2; }
</style>

<div class="container my-5">
   
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="fw-bold text-dark mb-1">Account Settings</h3>
            <p class="text-muted small">Manage your Ecobazar profile info and security parameters.</p>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-7">
            <div class="card shadow-sm">
                <div class="card-header py-3">
                    <h5 class="mb-0"><i class="bi bi-person me-2 eco-text-primary"></i>Profile Details</h5>
                </div>
                <div class="card-body p-4">
                    <form id="profileUpdateForm" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        
                        <div class="d-flex align-items-center gap-4 mb-4 pb-3 border-bottom">
                            <div class="position-relative">
                                <img src="{{ getProfileImg() }}" id="avatarTarget" class="avatar-preview" alt="Profile Picture"/>
                            </div>
                            <div>
                                <label for="profile_img" class="form-label fw-semibold text-dark mb-1">Profile Image</label>
                                <input type="file" class="form-control form-control-sm mb-1" id="profile_img" name="profile_img"
                                    accept="image/png, image/jpeg, image/jpg, image/webp">
                                <div class="form-text text-muted small">Square JPG, PNG or WEBP recommended.</div>
                                @error('profile_img')
                                    <span class="text-danger small d-block mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-secondary">Full Name</label>
                            <input type="text" value="{{ auth()->user()->name }}" class="form-control py-2" id="name" name="name" placeholder="John Doe" required>
                            <div class="invalid-feedback">Please provide your name.</div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold text-secondary">Email Address</label>
                            <input type="email" class="form-control py-2 bg-light" id="email" name="email" readonly value="{{ auth()->user()->email }}">
                            <div class="form-text text-muted small">Email address cannot be changed. Contact support if required.</div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn eco-btn-primary px-4 py-2 fw-semibold">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

       
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-header py-3">
                    <h5 class="mb-0"><i class="bi bi-shield-lock me-2 eco-text-primary"></i>Security</h5>
                </div>
                <div class="card-body p-4">
                    
                    <form id="passwordUpdateForm" action="" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold text-secondary">New Password</label>
                            <input type="password" class="form-control py-2" id="password" name="password" placeholder="Minimum 8 characters" required>
                        </div>

                        <div class="mb-4">
                            <label for="password_confirm" class="form-label fw-semibold text-secondary">Confirm New Password</label>
                            <input type="password" class="form-control py-2" id="password_confirm" name="password_confirm" placeholder="Re-type new password" required>
                            <div class="text-danger small mt-2 d-none" id="passwordError">
                                <i class="bi bi-exclamation-circle me-1"></i> Passwords do not match.
                            </div>
                        </div>

                        <button type="submit" class="btn eco-btn-outline w-100 py-2 fw-semibold">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const password = document.getElementById('password');
    const passwordConfirm = document.getElementById('password_confirm');
    const passwordError = document.getElementById('passwordError');
    const passwordForm = document.getElementById('passwordUpdateForm');
    const profileImgInput = document.getElementById('profile_img');
    const avatarTarget = document.getElementById('avatarTarget');

    
    if (profileImgInput && avatarTarget) {
        profileImgInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    avatarTarget.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    }

    
    passwordConfirm.addEventListener('input', function() {
        if (password.value === passwordConfirm.value) {
            passwordError.classList.add('d-none');
        }
    });

   
    passwordForm.addEventListener('submit', function(e) {
        if (password.value !== passwordConfirm.value) {
            e.preventDefault();
            passwordError.classList.remove('d-none');
        }
    });
});
</script>
@endpush
@endsection
