@extends('layouts.backend')

@section('title', 'Single Product')

@section('content')
<div class="form-container mt-4 mb-4 p-4 ">
    <h2 class="mb-4">Product Details</h2>

    {{-- ফর্ম অ্যাকশন ও মেথড শুধু প্লেসহোল্ডার — আপনি নিজের রাউট বসাবেন --}}
    <form action="{{ route('admin.product.show', ['id' => 1]) }}" method="POST">
        @csrf
        {{-- @method('PUT') প্রয়োজনে --}}

        <div class="row g-3">

            <!-- Product Name -->
            <div class="col-md-6">
                <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name"
                       value="Chinese Cabbage" placeholder="Enter product name" required>
                {{-- error message placeholder --}}
                <div class="invalid-feedback">Please enter a product name.</div>
            </div>

            <!-- Brand -->
            <div class="col-md-6">
                <label for="brand_id" class="form-label">Brand <span class="text-danger">*</span></label>
                <select class="form-select" id="brand_id" name="brand_id" required>
                    <option value="">Select Brand</option>
                    <option value="1" selected>Family</option>
                    <option value="2">Organic Valley</option>
                    <option value="3">Green Harvest</option>
                </select>
                <div class="invalid-feedback">Please select a brand.</div>
            </div>

            <!-- Category -->
            <div class="col-md-6">
                <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    <option value="1" selected>Vegetables</option>
                    <option value="2">Fruits</option>
                    <option value="3">Dairy</option>
                </select>
                <div class="invalid-feedback">Please select a category.</div>
            </div>

            <!-- Class -->
            <div class="col-md-6">
                <label for="class" class="form-label">Class (e.g., Organic, Premium)</label>
                <input type="text" class="form-control" id="class" name="class"
                       value="" placeholder="e.g., Fresh, Organic">
            </div>

            <!-- Price -->
            <div class="col-md-6">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                       value="" placeholder="0.00">
            </div>

            <!-- Description -->
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          placeholder="Enter product description">Fresh green Chinese cabbage, rich in vitamins.</textarea>
            </div>

            <!-- Tags (multiple select) -->
            <div class="col-12">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" id="tags" name="tags[]" multiple size="4">
                    <option value="1" selected>Vegetables</option>
                    <option value="2" selected>Healthy</option>
                    <option value="3" selected>Chinese Cabbage</option>
                    <option value="4" selected>Green Cabbage</option>
                    <option value="5">Organic</option>
                    <option value="6">Fresh</option>
                </select>
                <small class="text-muted">Hold Ctrl/Cmd to select multiple.</small>
            </div>

            <!-- Image Upload -->
            <div class="col-12">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                {{-- যদি ইমেজ আগে থেকে থাকে, সেটা দেখানোর জন্য --}}
                <div class="mt-2">
                    <img src="" alt="" srcset="">
                    <p class="text-muted small">Current image (if any). Upload new to replace.</p>
                </div>
            </div>

            <!-- Active Status -->
            <div class="col-12">
                <div class="form-check">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                    <label class="form-check-label" for="is_active">
                        Active (visible on site)
                    </label>
                </div>
            </div>

            <!-- Submit & Cancel Buttons -->
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary px-4">Save Product</button>
                <a href="#" class="btn btn-secondary px-4">Cancel</a>
            </div>

        </div>
    </form>
@endsection