@extends('layouts.backend')

@section('title', 'Category')
@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}">
@endpush

<div class="container-fluid px-4 py-4">

    <div class="d-flex justify-content-between align-items-center mb-4 page-header">
        <div>
            <h3 class="page-title mb-1">Categories</h3>
            <p class="page-subtitle mb-0">Organize your products into categories</p>
        </div>
        <a href="{{ route('admin.category.create') }}" class="btn btn-brand px-3 py-2 add-category-btn">
            <i class='bx bx-plus'></i> Add Category
        </a>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-category'></i></div>
                    <div>
                        <div class="stat-label">Total Categories</div>
                        <div class="stat-value">{{ $categories->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-package'></i></div>
                    <div>
                        <div class="stat-label">Total Products</div>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-trophy'></i></div>
                    <div>
                        <div class="stat-label">Best Categories</div>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-x-circle'></i></div>
                    <div>
                        <div class="stat-label">Inactive Categories</div>
                        <div class="stat-value">{{ $categories->where('status', 0)->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="card filter-card mb-4">
        <div class="card-body p-3">
            <form action="{{ route('admin.category.index') }}" class="row g-3 align-items-end">
                <div class="col-12 col-md-5">
                    <label class="form-label">Search Category</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class='bx bx-search'></i></span>
                        <input name="search" value="{{ request()->search ?? '' }}" type="text"
                            class="form-control border-start-0 ps-0" placeholder="Search by name...">
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option {{ request()->status == 1 ? 'selected' : '' }} value="1">Active</option>
                        <option {{ request()->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                    </select>
                </div>
                <div class="col-6 col-md-3">
                    <label class="form-label">&nbsp;</label>
                    <div class="empty-check">
                        <input type="checkbox" class="form-check-input" id="empty_category" name="empty_category"
                            value="{{ true }}">
                        <label for="empty_category">Empty Category</label>
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex gap-2">
                    <button type="submit" class="btn btn-brand w-100">
                        <i class='bx bx-filter-alt'></i> Filter
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Table -->
    <div class="card category-card">
        <div class="table-responsive">
            <table class="table table-categories mb-0">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Category</th>
                        <th>Total Products</th>
                        <th>Description</th>
                        <th class="text-center">Featured</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td><span class="category-title">{{ $category->title }}</span></td>
                        <td>0</td>
                        <td>
                            <span class="category-desc">
                                {{ strlen($category->details) == 0 ? '---' : (strlen($category->details) > 25 ? substr($category->details, 0, 25) . '...' : $category->details) }}
                            </span>
                        </td>
                        <td class="text-center">
                            @if ($category->featured)
                            <span class="badge-pill badge-yes">Yes</span>
                            @else
                            <span class="badge-pill badge-no">No</span>
                            @endif
                        </td>
                        <td>
                            @if ($category->status)
                            <span class="badge-pill badge-active">Active</span>
                            @else
                            <span class="badge-pill badge-inactive">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-edit">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                                    <i class='bx bx-trash-alt'></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">
                            <div class="empty-state text-center">
                                <i class='bx bx-category d-block mb-2'></i>
                                <p class="mb-3 text-muted">No categories were found</p>
                                <a href="{{ route('admin.category.create') }}" class="btn btn-brand btn-sm px-3">
                                    Create your first category
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection