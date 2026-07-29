@extends('layouts.backend')
@section('title', 'Create Category')
@section('content')

<style>
    :root {
        --brand: #00B207;
        --brand-dark: #00900a;
        --brand-light: #e6f9e7;
        --brand-darker: #007505;
    }

    .create-wrap {
        max-width: 980px;
        margin: 0 auto;
    }

    .split-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    }

    .split-card .row {
        min-height: 560px;
    }

    /* ---- Left info panel ---- */
    .info-panel {
        background: linear-gradient(160deg, var(--brand) 0%, var(--brand-darker) 100%);
        color: #fff;
        padding: 2.4rem 2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }

    .info-panel::before {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        top: -60px;
        right: -60px;
    }

    .info-panel::after {
        content: "";
        position: absolute;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
        bottom: -40px;
        left: -40px;
    }

    .info-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 1.2rem;
        position: relative;
        z-index: 1;
    }

    .info-panel h4 {
        font-weight: 700;
        margin-bottom: .6rem;
        position: relative;
        z-index: 1;
    }

    .info-panel p.lead-text {
        font-size: .92rem;
        opacity: .92;
        margin-bottom: 1.6rem;
        position: relative;
        z-index: 1;
    }

    .info-tips {
        list-style: none;
        padding: 0;
        margin: 0;
        position: relative;
        z-index: 1;
    }

    .info-tips li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: .85rem;
        margin-bottom: .9rem;
        opacity: .95;
    }

    .info-tips li i {
        font-size: 16px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .info-footer {
        position: relative;
        z-index: 1;
        font-size: .78rem;
        opacity: .8;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 1rem;
    }

    /* ---- Right form panel ---- */
    .form-panel {
        background: #fff;
        padding: 2.4rem 2.2rem;
    }

    .form-panel h5 {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1.6rem;
    }

    .field-block {
        margin-bottom: 1.3rem;
    }

    .field-block label {
        font-weight: 600;
        font-size: .82rem;
        text-transform: uppercase;
        letter-spacing: .03em;
        color: #6b7280;
        margin-bottom: 6px;
        display: block;
    }

    .field-block .form-control,
    .field-block .form-select {
        border: none;
        border-bottom: 2px solid #e5e7eb;
        border-radius: 0;
        padding: .55rem .1rem;
        font-size: .96rem;
        background: transparent;
        transition: border-color .15s ease;
    }

    .field-block .form-control:focus,
    .field-block .form-select:focus {
        border-color: var(--brand);
        box-shadow: none;
    }

    .field-block textarea.form-control {
        min-height: 90px;
        resize: vertical;
    }

    .required-star {
        color: #e53e3e;
    }

    .upload-inline {
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 2px solid #e5e7eb;
        padding: .4rem 0;
    }

    .upload-inline i {
        font-size: 20px;
        color: var(--brand);
    }

    .upload-inline input[type="file"] {
        border: none;
        padding: 0;
        font-size: .88rem;
        background: transparent;
    }

    .toggle-inline-row {
        display: flex;
        gap: 24px;
        margin: 1.6rem 0;
        flex-wrap: wrap;
    }

    .toggle-inline {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .toggle-inline .form-check-input {
        width: 2.3em;
        height: 1.25em;
        margin: 0;
        cursor: pointer;
    }

    .toggle-inline .form-check-input:checked {
        background-color: var(--brand);
        border-color: var(--brand);
    }

    .toggle-inline .form-check-input:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 178, 7, 0.15);
    }

    .toggle-inline label {
        font-weight: 600;
        font-size: .88rem;
        color: #374151;
        margin: 0;
        cursor: pointer;
    }

    .btn-brand-submit {
        background-color: var(--brand);
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 12px;
        padding: .85rem 1.2rem;
        font-size: .96rem;
        width: 100%;
        transition: background-color .15s ease, transform .1s ease;
    }

    .btn-brand-submit:hover {
        background-color: var(--brand-dark);
        color: #fff;
    }

    .btn-brand-submit:active {
        transform: scale(.98);
    }

   
</style>

<div class="container py-4">
    <div class="create-wrap">
        <div class="card split-card">
            <div class="row g-0">

                <!-- Left informational panel -->
                <div class="col-12 col-lg-5 info-panel">
                    <div>
                        <div class="info-icon"><i class='bx bx-category-alt'></i></div>
                        <h4>Create a New Category</h4>
                        <p class="lead-text">Categories help customers browse your store faster and keep your
                            product catalog organized.</p>
                        <ul class="info-tips">
                            <li><i class='bx bx-check-circle'></i> Use a short, clear title customers recognize
                                instantly.</li>
                            <li><i class='bx bx-check-circle'></i> Slug is used in the URL — keep it lowercase and
                                hyphenated.</li>
                            <li><i class='bx bx-check-circle'></i> Adding an image makes the category stand out on
                                the storefront.</li>
                            <li><i class='bx bx-check-circle'></i> Mark it "Featured" to highlight it on the
                                homepage.</li>
                        </ul>
                    </div>
                    <div class="info-footer">
                        Ecobazar Admin &middot; Category Management
                    </div>
                </div>

                <!-- Right form panel -->
                <div class="col-12 col-lg-7 form-panel">
                    <h5><i class="bx bx-plus-circle me-1" style="color: var(--brand);"></i> Add Category</h5>

                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="field-block">
                            <label>Category Title <span class="required-star">*</span></label>
                            <input type="text" name="title" placeholder="e.g. Fresh Vegetables" class="form-control">
                            @error('title')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="field-block">
                            <label>Slug <span class="required-star">*</span></label>
                            <input type="text" name="slug" placeholder="example: ac, dairy-product"
                                class="form-control">
                            @error('slug')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="field-block">
                            <label>Category Image (Optional)</label>
                            <div class="upload-inline">
                                <i class='bx bx-image-add'></i>
                                <input type="file" name="img" class="form-control">
                            </div>
                            @error('img')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="field-block mb-2">
                            <label>Description</label>
                            <textarea name="details" class="form-control" placeholder="Write a short description..."></textarea>
                            @error('details')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="toggle-inline-row">
                            <div class="toggle-inline">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" name="featured" type="checkbox" role="switch"
                                        id="featured">
                                </div>
                                <label for="featured">Featured</label>
                            </div>
                            <div class="toggle-inline">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" name="status" type="checkbox" role="switch"
                                        id="status" checked>
                                </div>
                                <label for="status">Status</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-brand-submit">
                            <i class="bx bx-save me-1"></i> Submit
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection