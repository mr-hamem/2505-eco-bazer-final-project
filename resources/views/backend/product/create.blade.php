@extends('layouts.backend')

@section('title', 'Single Product')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}">
@endpush

@push('js')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const featuredInput = document.getElementById('featured_img');
    const featuredPreview = document.getElementById('featuredPreview');
    const galleryInput = document.getElementById('gallery_images');
    const galleryPreview = document.getElementById('galleryPreview');

    featuredInput.addEventListener('change', () => {
        const file = featuredInput.files[0];
        if (!file) {
            featuredPreview.style.display = 'none';
            return;
        }
        featuredPreview.src = URL.createObjectURL(file);
        featuredPreview.style.display = 'block';
    });

    galleryInput.addEventListener('change', () => {
        galleryPreview.innerHTML = '';
        Array.from(galleryInput.files).forEach((file) => {
            const preview = document.createElement('img');
            preview.src = URL.createObjectURL(file);
            preview.alt = 'Gallery image preview';
            preview.className = 'img-thumbnail';
            preview.style.cssText = 'width:90px;height:90px;object-fit:cover;';
            galleryPreview.appendChild(preview);
        });
    });
});
</script>
@endpush

@push('js')
<script src="{{ asset('backend/assets/js/rte.js') }}"></script>
<script src="{{ asset('backend/assets/js/all_plugins.min.js') }}"></script>
<script>
    let editor1 = new RichTextEditor("#description");
</script>
@endpush

@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card form-container p-4 shadow-sm border-0">

        <div class="page-header-bar">
            <h4 class="mb-0"><i class="bx bx-leaf me-2"></i>Product Details</h4>
            <span class="badge-stock-status"><i class="bx bx-check-circle me-1"></i>In Stock</span>
        </div>

        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf

            <!-- Basic Info -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-info-circle"></i> Basic Information</div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-semibold">Product Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-success-focus" id="name" name="title"
                            value="{{ old('title') }}" placeholder="Enter product name" required>
                        @error('title')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="origin" class="form-label fw-semibold">Origin</label>
                        <input type="text" class="form-control border-success-focus" id="origin" name="origin"
                            value="{{ old('origin') }}" placeholder="Enter product origin" required>
                        @error('origin')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="category_id" class="form-label fw-semibold">Category <span
                                class="text-danger">*</span></label>
                        <select class="form-select border-success-focus" id="category_id" name="category_id" required>
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="stock" class="form-label fw-semibold">Stock</label>
                        <input type="number" class="form-control border-success-focus" id="stock" name="stock"
                            value="0" placeholder="e.g., 10, 15, 200">
                        @error('stock')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Pricing -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-dollar-circle"></i> Pricing</div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="price" class="form-label fw-semibold">Price ($)</label>
                        <div class="input-group">
                            <span class="input-group-text currency-badge">$</span>
                            <input type="number" step="0.01" class="form-control border-success-focus" id="price"
                                name="price" value="" placeholder="0.00">
                        </div>
                        @error('price')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="selling_price" class="form-label fw-semibold">Selling Price ($)</label>
                        <div class="input-group">
                            <span class="input-group-text currency-badge">$</span>
                            <input type="number" step="0.01" class="form-control border-success-focus"
                                id="selling_price" name="selling_price" value="" placeholder="0.00">
                        </div>
                        @error('selling_price')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Identification -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-barcode"></i> Identification</div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label for="sku" class="form-label fw-semibold">SKU</label>
                        <input type="text" class="form-control border-success-focus" id="sku" name="sku" value=""
                            placeholder="eg: 123456">
                        @error('sku')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="expiry_date" class="form-label fw-semibold">Expiry Date</label>
                        <input type="date" class="form-control border-success-focus" id="expiry_date"
                            name="expiry_date" value="">
                        @error('expiry_date')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="unit_type" class="form-label fw-semibold">Unit Type</label>
                        <select name="unit_type" id="unit_type" class="form-select border-success-focus">
                            <option value="KG">KG</option>
                            <option value="PEICE">PEICE</option>
                            <option value="GRAM">GRAM</option>
                            <option value="LITRE">LITRE</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Descriptions -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-detail"></i> Descriptions</div>
                <div class="row g-4">
                    <div class="col-12">
                        <label for="short_description" class="form-label fw-semibold">Short Description</label>
                        <textarea class="form-control border-success-focus" id="short_description"
                            name="short_description" rows="3"
                            placeholder="Enter product description">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.</textarea>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label fw-semibold">Description</label>
                        <textarea class="form-control border-success-focus" id="description" name="description"
                            rows="3" placeholder="Enter product description"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="tags" class="form-label fw-semibold">Tags</label>
                        <select class="form-select border-success-focus" id="tags" name="tags[]" multiple size="4">
                            <option value="1">Vegetables</option>
                            <option value="2">Healthy</option>
                            <option value="3">Chinese</option>
                            <option value="4">Cabbage</option>
                            <option value="5">Green Cabbage</option>
                            <option value="6">Organic</option>
                            <option value="7">Fresh</option>
                        </select>
                        <small class="helper-text d-block mt-1"><i class="bx bx-info-circle me-1"></i>Hold Ctrl/Cmd to
                            select multiple tags.</small>
                    </div>
                </div>
            </div>

            <!-- Media -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-image"></i> Product Media</div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold" for="featured_img">Featured Image</label>
                        <div class="upload-box border rounded p-3 text-center bg-light">
                            <i class="bx bx-cloud-upload display-6 text-primary mb-2"></i>
                            <input class="form-control" id="featured_img" name="featured_img" type="file" accept="image/*">
                            <small class="text-muted mt-1 d-block">Main display image for product list</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold" for="gallery_images">Product Gallery Images</label>
                        <div class="upload-box border rounded p-3 text-center bg-light">
                            <i class="bx bx-images display-6 text-primary mb-2"></i>
                            <input type="file" class="form-control" id="gallery_images" name="gall_image[]"
                                   accept="image/*" multiple>
                            <small class="text-muted mt-1 d-block">Upload multiple supporting images</small>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex flex-wrap gap-3 mt-2">
                            <img id="featuredPreview" src="{{ getImage() }}" alt="Featured image preview" class="img-thumbnail" style="display:none; width:120px; height:120px; object-fit:cover;">
                            <div id="galleryPreview" class="d-flex flex-wrap gap-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visibility -->
            <div class="form-section">
                <div class="form-section-title"><i class="bx bx-show"></i> Visibility</div>
                <div class="form-switch-card form-check form-switch mb-0">
                    <input type="hidden" name="status" value="0">
                    <input class="form-check-input check-input-success" type="checkbox" id="status"
                        name="status" value="1" checked>
                    <label class="form-check-label fw-semibold ms-2 mb-0" for="status">
                        Active (Visible on E-commerce Storefront)
                    </label>
                </div>
            </div>

            <div class="action-bar">
                <button type="submit" class="btn btn-brand px-4 py-2">
                    <i class="bx bx-save me-1"></i> Save Product
                </button>
                <a href="{{ route('admin.product.index') }}" class="btn btn-cancel px-4 py-2">
                    Cancel
                </a>
            </div>

        </form>
    </div>
</div>

@endsection
