@extends('layouts.backend')

@section('title', 'Settings')

@section('content')

<div class="form-container mt-4 mb-4 p-4">

    <h2 class="mb-4">
        Ecobazar Store Settings
    </h2>

    <form action="{{ route('admin.settings') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row g-3">

            {{-- Store Name --}}
            <div class="col-md-6">
                <label class="form-label">
                    Store Name
                    <span class="text-danger">*</span>
                </label>

                <input
                    type="text"
                    class="form-control"
                    name="store_name"
                    value="Ecobazar"
                    placeholder="Store Name">
            </div>

            {{-- Store Email --}}
            <div class="col-md-6">
                <label class="form-label">
                    Store Email
                </label>

                <input
                    type="email"
                    class="form-control"
                    name="store_email"
                    value="admin@ecobazar.com"
                    placeholder="Store Email">
            </div>

            {{-- Phone --}}
            <div class="col-md-6">
                <label class="form-label">
                    Phone Number
                </label>

                <input
                    type="text"
                    class="form-control"
                    name="phone"
                    placeholder="+8801XXXXXXXXX">
            </div>

            {{-- Address --}}
            <div class="col-md-6">
                <label class="form-label">
                    Store Address
                </label>

                <input
                    type="text"
                    class="form-control"
                    name="address"
                    placeholder="Store Address">
            </div>

            {{-- Logo --}}
            <div class="col-md-6">

                <label class="form-label">
                    Ecobazar Logo
                </label>

                <input
                    type="file"
                    class="form-control"
                    id="logo"
                    name="logo"
                    accept="image/*">

            </div>

            <div class="col-md-6 text-center">

                <img
                    id="preview"
                    src="https://placehold.co/200x120?text=Ecobazar+Logo"
                    class="img-thumbnail"
                    style="width:200px;">

            </div>

            {{-- Currency --}}
            <div class="col-md-6">

                <label class="form-label">
                    Currency
                </label>

                <select
                    class="form-select"
                    name="currency">

                    <option>BDT</option>
                    <option>USD</option>
                    <option>EUR</option>

                </select>

            </div>

            {{-- Language --}}
            <div class="col-md-6">

                <label class="form-label">
                    Language
                </label>

                <select
                    class="form-select"
                    name="language">

                    <option>English</option>
                    <option>বাংলা</option>

                </select>

            </div>

            {{-- Facebook --}}
            <div class="col-md-6">

                <label class="form-label">
                    Facebook
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Facebook URL">

            </div>

            {{-- Instagram --}}
            <div class="col-md-6">

                <label class="form-label">
                    Instagram
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Instagram URL">

            </div>

            {{-- LinkedIn --}}
            <div class="col-md-6">

                <label class="form-label">
                    LinkedIn
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="LinkedIn URL">

            </div>

            {{-- YouTube --}}
            <div class="col-md-6">

                <label class="form-label">
                    YouTube
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="YouTube URL">

            </div>

            {{-- Password --}}
            <div class="col-md-4">

                <label class="form-label">
                    Old Password
                </label>

                <input
                    type="password"
                    class="form-control">

            </div>

            <div class="col-md-4">

                <label class="form-label">
                    New Password
                </label>

                <input
                    type="password"
                    class="form-control">

            </div>

            <div class="col-md-4">

                <label class="form-label">
                    Confirm Password
                </label>

                <input
                    type="password"
                    class="form-control">

            </div>

            {{-- Notification --}}
            <div class="col-md-6">

                <div class="form-check mt-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        checked>

                    <label class="form-check-label">

                        Email Notification

                    </label>

                </div>

            </div>

            <div class="col-md-6">

                <div class="form-check mt-4">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        checked>

                    <label class="form-check-label">

                        SMS Notification

                    </label>

                </div>

            </div>

            {{-- Buttons --}}
            <div class="col-12 mt-4">

                <button
                    type="submit"
                    class="btn btn-success px-4">

                    Save Settings

                </button>

                <button
                    type="reset"
                    class="btn btn-secondary px-4">

                    Reset

                </button>

            </div>

        </div>

    </form>

</div>

<script>

document
.getElementById('logo')
.addEventListener('change',function(){

let file=this.files[0];

if(file){

document
.getElementById('preview')
.src=URL.createObjectURL(file);

}

});

</script>

@endsection