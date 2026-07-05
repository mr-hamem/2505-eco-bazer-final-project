@extends('layouts.backend')

@section('title', 'My Profile')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/cdn/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary ">
                        <h4 class="mb-0 text-white text-center">Update Profile</h4>
                    </div>
                    <div class="card-body">

                        <div id="alertContainer"></div>

                        <form id="updateUserForm" novalidate>
                            <div class="mb-3 py-4">
                                <img src="{{env('PROFILE_API') . auth()-> user()->name}}" style="width: 40px; height: 40px; border-radius: 50%; display:block;" alt="">
                                <label for="profileImage" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="profileImage" accept="image/*">
                                <div class="form-text">Accepted formats: JPG, PNG, GIF (Max 2MB).</div>
                                <div class="invalid-feedback">Please select a valid image file.</div>
                            </div>

                            <div class="mb-3 d-none" id="previewContainer">
                                <label class="form-label d-block">Image Preview</label>
                                <img id="imagePreview" src="#" alt="Profile Preview" class="img-thumbnail" style="max-height: 150px;">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-index form-control" id="name" value="John Doe" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="johndoe@example.com" readonly>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">New Password (Leave blank to keep current)</label>
                                <input type="password" class="form-control" id="password" minlength="8">
                                <div class="invalid-feedback">Password must be at least 8 characters long.</div>
                            </div>

                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword">
                                <div class="invalid-feedback">Passwords do not match.</div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="#" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')


    
    <script>
        const profileImage = document.getElementById('profileImage');
const previewContainer = document.getElementById('previewContainer');
const imagePreview = document.getElementById('imagePreview');

// 1. Live Image Preview & Basic Validation
profileImage.addEventListener('change', function() {
    const file = this.files[0];
    
    if (file) {
        // Basic Client-side Size Validation (e.g., 2MB Max)
        const fileSizeMB = file.size / (1024 * 1024);
        if (fileSizeMB > 2) {
            alert('File is too large! Maximum size allowed is 2MB.');
            this.value = ''; // Reset input
            previewContainer.classList.add('d-none');
            return;
        }

        // Generate Preview using FileReader
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            previewContainer.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    } else {
        previewContainer.classList.add('d-none');
    }
});

// 2. Updated Form Submission logic
document.getElementById('updateUserForm').addEventListener('submit', function (event) {
    event.preventDefault();
    event.stopPropagation();

    const form = this;
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const alertContainer = document.getElementById('alertContainer');

    confirmPassword.setCustomValidity('');

    if (password.value.length > 0 && password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity('Passwords do not match');
    }

    if (!form.checkValidity()) {
        form.classList.add('was-validated');
    } else {
        form.classList.remove('was-validated');
        
        /* NOTE: When sending files to a backend API (like Laravel), 
           you must use FormData instead of a standard JSON object.
        */
        const formData = new FormData();
        formData.append('name', document.getElementById('name').value);
        formData.append('email', document.getElementById('email').value);
        if (password.value) formData.append('password', password.value);
        
        // Append the file if one was selected
        if (profileImage.files[0]) {
            formData.append('profile_image', profileImage.files[0]);
        }

        console.log('Sending FormData payload...');
        // To send this to Laravel, you would use:
        // fetch('/user/update', { method: 'POST', body: formData })

        alertContainer.innerHTML = `
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Profile and image updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
    }
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    @endpush
</body>

</html>
@endsection