@extends('layouts.backend')

@section('title', 'Single Product')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
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
        <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0 ps-0">
            <h4 class="fw-bold mb-0 text-success"><i class="bx bx-leaf me-2"></i>Product Details</h4>
            <span class="badge bg-label-success rounded-pill px-3 py-2 fw-semibold">In Stock</span>
        </div>


        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf
            <div class="row g-4">

                <div class="col-md-6">
                    <label for="name" class="form-label fw-semibold text-dark">Product Name <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <input type="text" class="form-control border-success-focus" id="name" name="title"
                            value="{{ old('title') }}" placeholder="Enter product name" required>
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="brand_id" class="form-label fw-semibold text-dark">Origin</label>
                    <input type="text" class="form-control border-success-focus" id="origin" name="origin"
                        value="{{ old('origin') }}" placeholder="Enter product origin" required>
                    @error('origin')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="category_id" class="form-label fw-semibold text-dark">Category <span
                            class="text-danger">*</span></label>
                    <select class="form-select border-success-focus" id="category_id" name="category_id" required>
                        <option disabled selected>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">Please select a category.</div>
                </div>

                <div class="col-md-6">
                    <label for="class" class="form-label fw-semibold text-dark">Stock</label>
                    <input type="number" class="form-control border-success-focus" id="stock" name="stock" value="0"
                        placeholder="e.g., 10 , 15 , 200">

                    @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="price" class="form-label fw-semibold text-dark">Price ($)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-label-success text-success fw-bold">$</span>
                        <input type="number" step="0.01" class="form-control border-success-focus" id="price"
                            name="price" value="" placeholder="0.00">
                    </div>
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label fw-semibold text-dark">Selling Price ($)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-label-success text-success fw-bold">$</span>
                        <input type="number" step="0.01" class="form-control border-success-focus" id="selling_price"
                            name="selling_price" value="" placeholder="0.00">
                    </div>
                    @error('selling_price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-md-4">
                    <label for="sku" class="form-label fw-semibold text-dark">SKU</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-success-focus" id="sku" name="sku" value=""
                            placeholder="eg: 123456">
                    </div>
                    @error('sku')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="expiry_date" class="form-label fw-semibold text-dark">Expiry Date</label>
                    <div class="input-group">
                        <input type="date" class="form-control border-success-focus" id="expiry_date" name="expiry_date"
                            value="" placeholder="eg: 123456">
                    </div>
                    @error('expiry_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="sku" class="form-label fw-semibold text-dark">Unit Type</label>
                    <div class="input-group">
                        <select name="unit_type" class="form-control">
                            <option value="KG">KG</option>
                            <option value="PEICE">PEICE</option>
                            <option value="GRAM">GRAM</option>
                            <option value="LITRE">LITRE</option>
                        </select>
                    </div>
                    @error('sku')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="description" class="form-label fw-semibold text-dark">Short Description</label>
                    <textarea class="form-control border-success-focus" id="short_description" name="short_description"
                        rows="3"
                        placeholder="Enter product description">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius magna a consequat pulvinar.</textarea>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label fw-semibold text-dark">Description</label>
                    <textarea class="form-control border-success-focus" id="description" name="description" rows="3"
                        placeholder="Enter product description"></textarea>
                </div>

                <div class="col-12">
                    <label for="tags" class="form-label fw-semibold text-dark">Tags</label>
                    <select class="form-select border-success-focus" id="tags" name="tags[]" multiple size="4">
                        <option value="1">Vegetables</option>
                        <option value="2">Healthy</option>
                        <option value="3">Chinese</option>
                        <option value="4">Cabbage</option>
                        <option value="5">Green Cabbage</option>
                        <option value="6">Organic</option>
                        <option value="7">Fresh</option>
                    </select>
                    <small class="text-muted d-block mt-1"><i class="bx bx-info-circle me-1"></i>Hold Ctrl/Cmd to select
                        multiple tags.</small>
                </div>

                <div class="col-12">
                    <div class="">
                        <label class="form-check-label fw-semibold ms-1" for="is_active">
                            Featured Image
                        </label>
                        <input class="form-control" id="featured_img" name="featured_img" type="file">

                    </div>
                </div>


                <div class="col-12">
                    <label for="image" class="form-label fw-semibold text-dark">Product Image</label>
                    <input type="file" class="form-control border-success-focus mb-3" id="image" name="gall_image[]"
                        accept="image/*" multiple>

                    {{-- ছবি বা থাম্বনেইল প্রিভিউ দেখানোর জন্য ডিজাইন আর্কিটেকচার --}}
                    <div class="d-flex align-items-start gap-3 p-3 bg-light rounded border border-dashed">
                        <div class="thumbnail-gallery d-flex flex-column gap-2" style="width: 60px;">
                            <div class="border rounded p-1 bg-white border-success"><img
                                    src="https://via.placeholder.com/50" alt="thumb" class="img-fluid rounded"></div>
                            <div class="border rounded p-1 bg-white opacity-50"><img
                                    src="https://via.placeholder.com/50" alt="thumb" class="img-fluid rounded"></div>
                            <div class="border rounded p-1 bg-white opacity-50"><img
                                    src="https://via.placeholder.com/50" alt="thumb" class="img-fluid rounded"></div>
                        </div>
                        <div class="main-preview-box border rounded p-2 bg-white flex-grow-1 text-center"
                            style="max-width: 250px;">
                            <img src="https://via.placeholder.com/200" alt="Chinese Cabbage Main Image"
                                class="img-fluid rounded">
                            <p class="text-muted small mb-0 mt-2">Current Active Image</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-check form-switch card-accent-green">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input check-input-success" type="checkbox" id="is_active"
                            name="is_active" value="1" checked>
                        <label class="form-check-label fw-semibold ms-1" for="is_active">
                            Active (Visible on E-commerce Storefront)
                        </label>
                    </div>
                </div>

                <div class="col-12 mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success btn-md px-4 py-2 fw-semibold shadow-sm text-white"
                        style="background-color: #2cba59; border-color: #2cba59;">
                        <i class="bx bx-save me-1"></i> Save Product
                    </button>
                    <a href="#" class="btn btn-label-secondary btn-md px-4 py-2 fw-semibold">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

{{-- ফর্মের কালার ও স্নীট ফ্রেমওয়ার্কের সাথে পারফেক্ট ম্যাচিং করার অতিরিক্ত কিছু CSS প্রোপার্টি --}}
<style>
    .border-success-focus:focus {
        border-color: #2cba59 !important;
        box-shadow: 0 0 0 0.2rem rgba(44, 186, 89, 0.25) !important;
    }

    .check-input-success:checked {
        background-color: #2cba59 !important;
        border-color: #2cba59 !important;
    }

    .bg-label-success {
        background-color: #e8fadf !important;
        color: #2cba59 !important;
    }

    .border-dashed {
        border-style: dashed !important;
    }
</style>
@endsection