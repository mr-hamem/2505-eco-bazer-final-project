@extends('layouts.backend')
@section('title', 'Add Instagram Post')
@section('content')

<style>
    :root {
        --brand: #00B207;
        --brand-dark: #00900a;
        --brand-light: #e6f9e7;
        --brand-darker: #007505;
    }

    .create-wrap {
        max-width: 1100px;
        margin: 0 auto;
    }

    .split-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    }

    .split-card .row {
        min-height: 520px;
    }

    .info-panel {
        background: linear-gradient(160deg, #d62976 0%, #8a3ab9 50%, #4c68d7 100%);
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
        color: #fff;
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

    .field-block .form-control {
        border: none;
        border-bottom: 2px solid #e5e7eb;
        border-radius: 0;
        padding: .55rem .1rem;
        font-size: .96rem;
        background: transparent;
        transition: border-color .15s ease;
    }

    .field-block .form-control:focus {
        border-color: var(--brand);
        box-shadow: none;
    }

    .required-star {
        color: #e53e3e;
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

    .preview-panel {
        background: #f8f9fa;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .preview-label {
        font-size: .8rem;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #6b7280;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .preview-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 280px;
        transition: all .3s ease;
    }

    .preview-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    .preview-card .preview-overlay {
        position: relative;
    }

    .preview-card .preview-overlay::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 60%);
    }

    .preview-card .preview-body {
        padding: 1rem;
        text-align: center;
    }

    .preview-card .preview-url {
        font-size: .8rem;
        color: #8e8e8e;
        word-break: break-all;
    }

    .preview-card .preview-icon {
        position: absolute;
        bottom: 12px;
        right: 12px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .preview-placeholder {
        width: 100%;
        max-width: 280px;
        aspect-ratio: 1 / 1;
        background: #e9ecef;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #adb5bd;
        gap: .5rem;
    }

    .preview-placeholder i {
        font-size: 48px;
    }

    .preview-placeholder span {
        font-size: .85rem;
    }
</style>

<div class="container py-4">
    <div class="create-wrap">
        <div class="card split-card">
            <div class="row g-0">

                <!-- Left info panel -->
                <div class="col-12 col-lg-5 info-panel">
                    <div>
                        <div class="info-icon"><i class='bx bxl-instagram'></i></div>
                        <h4>Add Instagram Post</h4>
                        <p class="lead-text">Share your Instagram posts on the website homepage to engage more visitors.</p>
                        <ul class="info-tips">
                            <li><i class='bx bx-check-circle'></i> Paste a valid Instagram post or reel URL.</li>
                            <li><i class='bx bx-check-circle'></i> Add an optional direct image URL for faster loading.</li>
                            <li><i class='bx bx-check-circle'></i> Use Sort Order to control display position.</li>
                            <li><i class='bx bx-check-circle'></i> Preview updates instantly as you type.</li>
                        </ul>
                    </div>
                    <div class="info-footer">
                        Ecobazar Admin &middot; Instagram Management
                    </div>
                </div>

                <!-- Right form panel -->
                <div class="col-12 col-lg-7 form-panel">
                    <h5><i class="bx bx-plus-circle me-1" style="color: #d62976;"></i> New Instagram Post</h5>

                    <form action="{{ route('admin.instagram.store') }}" method="POST" id="instagramForm">
                        @csrf

                        <div class="field-block">
                            <label>Instagram URL <span class="required-star">*</span></label>
                            <input type="url" name="instagram_url" id="instagramUrl"
                                placeholder="https://www.instagram.com/p/..." class="form-control"
                                value="{{ old('instagram_url') }}" required oninput="updatePreview()">
                            @error('instagram_url')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="field-block">
                            <label>Image URL (Optional)</label>
                            <input type="url" name="image_url" id="imageUrl"
                                placeholder="https://example.com/image.jpg" class="form-control"
                                value="{{ old('image_url') }}" oninput="updatePreview()">
                            @error('image_url')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="field-block">
                            <label>Sort Order</label>
                            <input type="number" name="sort_order" class="form-control"
                                placeholder="0" value="{{ old('sort_order', 0) }}">
                            @error('sort_order')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="toggle-inline-row">
                            <div class="toggle-inline">
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" name="is_active" value="1" type="checkbox" role="switch"
                                        id="is_active" @checked(old('is_active', true))>
                                </div>
                                <label for="is_active">Active</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-brand-submit">
                            <i class="bx bx-save me-1"></i> Save Post
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function updatePreview() {
    const url = document.getElementById('instagramUrl').value.trim();
    const imageUrl = document.getElementById('imageUrl').value.trim();

    const container = document.getElementById('previewContainer');

    if (!url && !imageUrl) {
        container.innerHTML = `
            <div class="preview-placeholder">
                <i class='bx bx-image'></i>
                <span>Preview will appear here</span>
            </div>
        `;
        return;
    }

    const displayImage = imageUrl || 'https://via.placeholder.com/400x400?text=Instagram+Post';
    const shortUrl = url ? (url.length > 40 ? url.substring(0, 40) + '...' : url) : 'No URL provided';

    container.innerHTML = `
        <div class="preview-card">
            <div class="preview-overlay">
                <img src="${displayImage}" alt="Preview" onerror="this.src='https://via.placeholder.com/400x400?text=Invalid+Image'">
                <div class="preview-icon">
                    <i class='bx bxl-instagram' style="color: #d62976; font-size: 20px;"></i>
                </div>
            </div>
            <div class="preview-body">
                <p class="preview-url">${shortUrl}</p>
            </div>
        </div>
    `;
}

document.addEventListener('DOMContentLoaded', function() {
    updatePreview();
});
</script>

@endsection