@extends('layouts.backend')

@section('title', 'All Products')
@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
@endpush

<div class="container-fluid px-4 py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="page-title mb-1">Products</h3>
            <p class="page-subtitle mb-0">Manage your catalog, stock and pricing</p>
        </div>
        <a href="{{ route('admin.product.create') }}" class="btn btn-brand px-3 py-2">
            <i class='bx bx-plus'></i> Add Product
        </a>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-package'></i></div>
                    <div>
                        <div class="stat-label">Total Products</div>
                        <div class="stat-value">{{ $products->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bxs-star'></i></div>
                    <div>
                        <div class="stat-label">Featured Products</div>
                        <div class="stat-value">{{ $products->where('featured', true)->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-trophy'></i></div>
                    <div>
                        <div class="stat-label">Best Products</div>
                        <div class="stat-value">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card stat-card h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="stat-icon"><i class='bx bx-error-alt'></i></div>
                    <div>
                        <div class="stat-label">Low On Stock</div>
                        <div class="stat-value">{{ $products->where('stock', '<', 20)->count() }}</div>
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
                    <label class="form-label">Search Products</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class='bx bx-search'></i></span>
                        <input name="search" value="{{ request()->search ?? '' }}" type="text"
                            class="form-control border-start-0 ps-0" placeholder="Search by name...">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option {{ request()->status == 1 ? 'selected' : '' }} value="1">Active</option>
                        <option {{ request()->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                    </select>
                </div>
                <div class="col-6 col-md-2">
                    <label class="form-label">Stock</label>
                    <select name="stock" class="form-select">
                        <option value="">All Stock</option>
                        <option {{ request()->stock == 1 ? 'selected' : '' }} value="1">In Stock</option>
                        <option {{ request()->stock == 0 ? 'selected' : '' }} value="0">Out of Stock</option>
                    </select>
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
    <div class="card product-card">
        <div class="table-responsive">
            <table class="table table-products mb-0">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th class="text-center">Featured</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $key => $product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            <div class="d-flex gap-3 align-items-center">
                                <img src="{{ getImage($product->image) }}" loading="lazy" class="product-thumb"
                                    alt="{{ $product->title }}" title="{{ $product->title }}" />
                                <a href="#" class="product-title">{{ $product->title }}</a>
                            </div>
                        </td>
                        <td>{{ $product->category_id }}</td>
                        <td>
                            @if ($product->selling_price && $product->selling_price > 0)
                            <p class="price-current">{{ number_format($product->selling_price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</p>
                            <del class="price-old">{{ number_format($product->price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</del>
                            @else
                            <p class="price-current">{{ number_format($product->price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</p>
                            @endif
                        </td>
                        <td class="text-center">
                            @if ($product->featured)
                            <a href="#" class="star-active fs-5"><i class='bx bxs-star'></i></a>
                            @else
                            <a href="#" class="star-inactive fs-5"><i class='bx bxs-star'></i></a>
                            @endif
                        </td>
                        <td>
                            @if ($product->stock <= 0)
                            <span class="badge-stock stock-out">Out of stock</span>
                            @elseif ($product->stock < 20)
                            <span class="badge-stock stock-low">{{ $product->stock }} left</span>
                            @else
                            <span class="badge-stock stock-ok">{{ $product->stock }} in stock</span>
                            @endif
                        </td>
                        <td>
                            @if ($product->status)
                            <span class="badge-status badge-active">Active</span>
                            @else
                            <span class="badge-status badge-inactive">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="#" class="icon-btn" title="Edit"><i class='bx bx-edit-alt'></i></a>
                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icon-btn icon-btn-danger border-0" title="Delete">
                                    <i class='bx bx-trash-alt'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <div class="empty-state text-center">
                                <i class='bx bx-package d-block mb-2'></i>
                                <p class="mb-3 text-muted">No products were found</p>
                                <a href="{{ route('admin.product.create') }}" class="btn btn-brand btn-sm px-3">
                                    Create your first product
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