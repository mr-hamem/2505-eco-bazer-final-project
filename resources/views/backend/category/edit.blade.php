@extends('layouts.backend')

@section('title', 'Edit Category')

@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
@endpush

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="page-title mb-1">Edit Category</h3>
            <p class="page-subtitle mb-0">Update this category's information and visibility.</p>
        </div>
        <a href="{{ route('admin.category.index') }}" class="btn btn-outline-secondary"><i class='bx bx-arrow-back'></i> Back to Categories</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="title" class="form-label fw-semibold">Category Title <span class="text-danger">*</span></label>
                        <input id="title" type="text" name="title" value="{{ old('title', $category->title) }}" class="form-control @error('title') is-invalid @enderror" required>
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="form-label fw-semibold">Slug <span class="text-danger">*</span></label>
                        <input id="slug" type="text" name="slug" value="{{ old('slug', $category->slug) }}" class="form-control @error('slug') is-invalid @enderror" required>
                        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-12">
                        <label for="details" class="form-label fw-semibold">Description</label>
                        <textarea id="details" name="details" rows="4" class="form-control @error('details') is-invalid @enderror">{{ old('details', $category->details) }}</textarea>
                        @error('details') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="img" class="form-label fw-semibold">Category Image</label>
                        <input id="img" type="file" name="img" accept="image/jpeg,image/png,image/webp" class="form-control @error('img') is-invalid @enderror">
                        @error('img') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        @if ($category->img)
                            <img src="{{ getImage($category->img) }}" alt="{{ $category->title }}" class="img-thumbnail mt-3" style="max-height: 100px;">
                        @endif
                    </div>
                    <div class="col-md-6 d-flex align-items-center gap-4 pt-md-4">
                        <div class="form-check form-switch">
                            <input type="hidden" name="featured" value="0">
                            <input class="form-check-input" type="checkbox" role="switch" id="featured" name="featured" value="1" @checked(old('featured', $category->featured))>
                            <label class="form-check-label" for="featured">Featured category</label>
                        </div>
                        <div class="form-check form-switch">
                            <input type="hidden" name="status" value="0">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" @checked(old('status', $category->status))>
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-brand"><i class='bx bx-save'></i> Save Changes</button>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
