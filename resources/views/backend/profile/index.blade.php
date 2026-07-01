@extends('layouts.backend')

@section('title', 'My Profile')

@section('content')
<div class="container-fluid py-4 bg-light" style="font-family: 'Inter', sans-serif; min-height: 100vh;">
    <!-- Main Dashboard Row Layout matching the mockup -->
    <div class="row g-4">
        
        <!-- Left Column: Profile Card & Security Tips -->
        <div class="col-xl-4 col-lg-5">
            <div class="d-grid gap-4">
                
                <!-- Profile Picture Display Card -->
                <div class="card border-0 shadow-sm p-4 text-center" style="border-radius: 8px; background: #ffffff;">
                    <div class="text-start">
                        <h6 class="fw-bold text-dark mb-4" style="font-size: 0.95rem; letter-spacing: -0.2px;">Profile Picture</h6>
                    </div>
                    
                    <!-- Avatar Stack with Camera Indicator Mockup Overlay -->
                    <div class="position-relative d-inline-block mx-auto mb-3">
                        <img src="{{ getProfileImg() }}" 
                             alt="{{ auth()->user()->name }}"
                             class="rounded-circle object-fit-cover" 
                             style="width: 150px; height: 150px; border: 1px solid #edf2f7; padding: 2px;" />
                        <span class="position-absolute bottom-0 end-0 bg-white p-2 rounded-circle shadow-sm border text-success d-flex align-items-center justify-content-center" 
                              style="width: 36px; height: 36px; cursor: pointer; transform: translate(-5px, -5px);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a1 1 0 0 1-.707-.293l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A1 1 0 0 1 3.414 4z"/>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg>
                        </span>
                    </div>
                    
                    <h5 class="fw-bold text-dark mb-1" style="font-size: 1.2rem;">{{ auth()->user()->name }}</h5>
                    <div class="d-inline-block bg-success bg-opacity-10 text-success fw-bold px-3 py-1 rounded mb-4" style="font-size: 0.75rem;">
                        Super Admin
                    </div>
                    
                    <hr class="text-muted opacity-25 my-3">
                    
                    <!-- Meta List -->
                    <div class="text-start">
                        <div class="d-flex justify-content-between mb-3" style="font-size: 0.85rem;">
                            <span class="text-muted fw-semibold">Admin ID</span>
                            <span class="text-dark fw-bold">#ADM001</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3" style="font-size: 0.85rem;">
                            <span class="text-muted fw-semibold">Role</span>
                            <span class="text-dark fw-bold">Super Admin</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3" style="font-size: 0.85rem;">
                            <span class="text-muted fw-semibold">Account Created</span>
                            <span class="text-dark fw-bold">01 Jan 2024</span>
                        </div>
                        <div class="d-flex justify-content-between mb-0" style="font-size: 0.85rem;">
                            <span class="text-muted fw-semibold">Last Login</span>
                            <span class="text-dark fw-bold">26 May 2024, 10:30 AM</span>
                        </div>
                    </div>
                </div>
                
                <!-- Account Security Tips Component Box -->
                <div class="card border-0 shadow-sm p-4" style="border-radius: 8px; background: #ffffff;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="text-success me-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61 61 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .574 0q.112-.033.293-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.955 7.33a.476.476 0 0 1 .662.011l1.38 1.393 3.093-3.1a.48.48 0 1 1 .68.68L8.337 9.776a.476.476 0 0 1-.673-.008L5.944 8a.476.476 0 0 1 .011-.67"/>
                            </svg>
                        </div>
                        <h6 class="fw-bold text-dark mb-0" style="font-size: 0.95rem;">Account Security Tips</h6>
                    </div>
                    <p class="text-muted lh-base mb-4" style="font-size: 0.85rem; font-weight: 500;">
                        Keep your account secure by using a strong password and don't share your login information with anyone.
                    </p>
                    <ul class="list-unstyled mb-0 d-grid gap-3" style="font-size: 0.85rem; font-weight: 600;">
                        <li class="d-flex align-items-center text-dark">
                            <i class="bi bi-check-circle-fill text-success me-2 d-flex align-items-center"></i> Use strong password
                        </li>
                        <li class="d-flex align-items-center text-dark">
                            <i class="bi bi-check-circle-fill text-success me-2 d-flex align-items-center"></i> Change password regularly
                        </li>
                        <li class="d-flex align-items-center text-dark">
                            <i class="bi bi-check-circle-fill text-success me-2 d-flex align-items-center"></i> Enable two-factor authentication
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Column: Forms Panel Area (Basic Info & Change Password) -->
        <div class="col-xl-8 col-lg-7">
            <div class="d-grid gap-4">
                
                <!-- Section 1: Basic Information -->
                <div class="card border-0 shadow-sm p-4" style="border-radius: 8px; background: #ffffff;">
                    <h6 class="fw-bold text-dark mb-4" style="font-size: 1.05rem; letter-spacing: -0.2px;">Basic Information</h6>
                    
                    <form id="profileUpdateForm" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="d-grid gap-3">
                            <!-- Full Name Inline Row -->
                            <div class="row align-items-center">
                                <label for="name" class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ auth()->user()->name }}" class="form-control border fw-medium px-3 text-dark" id="name" name="name" placeholder="Jhon Doe" required style="height: 46px; border-color: #e4e7eb !important; border-radius: 6px;">
                                    <div class="invalid-feedback fw-bold">Please provide your name.</div>
                                </div>
                            </div>

                            <!-- Email Address Inline Row -->
                            <div class="row align-items-center">
                                <label for="email" class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control border fw-medium px-3" id="email" name="email" readonly value="{{ auth()->user()->email }}" style="height: 46px; border-color: #e4e7eb !important; border-radius: 6px; background-color: #ffffff;">
                                    <div class="invalid-feedback fw-bold">Please provide a valid email address.</div>
                                </div>
                            </div>

                            <!-- Phone Number Mockup Inline Row -->
                            <div class="row align-items-center">
                                <label for="phone" class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control border fw-medium px-3 text-dark" id="phone" placeholder="+880 1712 345 678" value="+880 1712 345 678" style="height: 46px; border-color: #e4e7eb !important; border-radius: 6px;">
                                </div>
                            </div>

                            <!-- Profile Picture File Upload Input Inline Row -->
                            <div class="row align-items-start mt-1">
                                <label for="profile_img" class="col-sm-3 col-form-label fw-bold text-dark pt-2" style="font-size: 0.88rem;">Profile Picture</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control border fw-medium" id="profile_img" name="profile_img" accept="image/png, image/jpeg, image/jpg, image/webp" style="height: 46px; border-color: #e4e7eb !important; border-radius: 6px; padding-top: 9px;">
                                    <div class="form-text mt-2 text-muted fw-medium" style="font-size: 0.8rem;">Allowed JPG, PNG or GIF. Max size of 2MB.</div>
                                    @error('profile_img')
                                        <span class="text-danger small mt-1 d-block fw-bold">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Update Profile Form Submit Button Layout -->
                        <div class="row mt-4">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn text-white fw-bold px-4" style="background-color: #17b551; border-color: #17b551; height: 44px; border-radius: 6px; font-size: 0.9rem;">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Section 2: Change Password Card Canvas -->
                <div class="card border-0 shadow-sm p-4" style="border-radius: 8px; background: #ffffff;">
                    <h6 class="fw-bold text-dark mb-4" style="font-size: 1.05rem; letter-spacing: -0.2px;">Change Password</h6>
                    
                    <form action="">
                        <div class="d-grid gap-3">
                            <!-- Current Password Entry Row Layout Wrapper (Mockup style text) -->
                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">Current Password</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control border fw-medium px-3 text-dark" placeholder="Enter current password" style="height: 46px; border-color: #e4e7eb !important; border-top-left-radius: 6px; border-bottom-left-radius: 6px;">
                                        <span class="input-group-text bg-light border" style="border-color: #e4e7eb !important; border-top-right-radius: 6px; border-bottom-right-radius: 6px; cursor: pointer;">
                                            <i class="bi bi-eye-slash text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- New Password Field Inline Row layout wrapper -->
                            <div class="row align-items-center">
                                <label for="password" class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">New Password</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control border fw-medium px-3 text-dark" id="password" name="password" placeholder="Enter new password" style="height: 46px; border-color: #e4e7eb !important; border-top-left-radius: 6px; border-bottom-left-radius: 6px;">
                                        <span class="input-group-text bg-light border" style="border-color: #e4e7eb !important; border-top-right-radius: 6px; border-bottom-right-radius: 6px; cursor: pointer;">
                                            <i class="bi bi-eye-slash text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Confirm Secret Code Inline Row layout wrapper -->
                            <div class="row align-items-center">
                                <label for="password_confirm" class="col-sm-3 col-form-label fw-bold text-dark" style="font-size: 0.88rem;">Confirm New Password</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control border fw-medium px-3 text-dark" id="password_confirm" name="password_confirm" placeholder="Confirm new password" style="height: 46px; border-color: #e4e7eb !important; border-top-left-radius: 6px; border-bottom-left-radius: 6px;">
                                        <span class="input-group-text bg-light border" style="border-color: #e4e7eb !important; border-top-right-radius: 6px; border-bottom-right-radius: 6px; cursor: pointer;">
                                            <i class="bi bi-eye-slash text-muted"></i>
                                        </span>
                                    </div>
                                    <div class="text-danger small mt-2 d-none fw-bold" id="passwordError">
                                        Passwords do not match.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Update Password Actions trigger layout button wrapper -->
                        <div class="row mt-4">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn text-white fw-bold px-4" style="background-color: #17b551; border-color: #17b551; height: 44px; border-radius: 6px; font-size: 0.9rem;">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Extra CSS links inside push if needed for Bootstrap Icons styling -->
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const password = document.getElementById('password');
        const passwordConfirm = document.getElementById('password_confirm');
        const passwordError = document.getElementById('passwordError');

        if(passwordConfirm && password) {
            passwordConfirm.addEventListener('input', function() {
                if (password.value === passwordConfirm.value) {
                    passwordError.classList.add('d-none');
                }
            });
        }
    });
</script>
@endpush
@endsection