@extends('layouts.backend')

@section('title', 'All Products')
@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    Total Products
                </div>
                <div class="card-body">
                    <h1>{{ $products->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    Featured Products
                </div>
                <div class="card-body">
                    <h1>{{ $products->where('featured', true)->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    Best Products
                </div>
                <div class="card-body">
                    <h1>0</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    Low On Stock Products
                </div>
                <div class="card-body">
                    <h1>{{ $products->where('stock', '<', 20)->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-between align-items-end">
        <div class="col-lg-8">
            <form action="{{ route('admin.category.index') }}">
                <div class="d-flex gap-2 align-items-center">
                    <div class="form-group">
                        <label for="">Search Products</label>
                        <input name="search" value="{{ request()->search ?? '' }}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option {{ request()->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ request()->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Stock</label>
                        <select name="stock" class="form-control">
                            <option {{ request()->stock == 1 ? 'selected' : '' }} value="1">In Stock</option>
                            <option {{ request()->stock == 0 ? 'selected' : '' }} value="0">Out of Stock</option>
                        </select>
                    </div>

                    <button class="btn  btn-success"> Filter</button>
                </div>

            </form>
        </div>
        <div class="col-lg-2"><a href="{{ route('admin.product.create') }}" class="btn btn-primary">+ Add Product</a>
        </div>
    </div>


</div>

<div class="container">
    <table class="table table-responsive table-striped table-hover">
        <thead>
            <tr>
                <td>Sl</td>
                <td>Product</td>
                <td>Category</td>
                <td>Price</td>
                <td>Featured</td>
                <td>Stock</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key=>$product)
            <tr>
                <td>{{ ++$key }}</td>
                <td>
                    <div class="d-flex gap-2 align-items-center">
                        <img src="{{  getImage($product->image)  }}" loading="lazy" alt="{{ $product->title }}"
                            title="{{ $product->title }}" aria-details="{{ $product->title }}" width="60px" />
                        <a href="#" class="mb-0">{{ $product->title }}</a>
                    </div>
                </td>
                <td>{{ $product->category_id }}</td>
                <td>
                    @if ($product->selling_price && $product->selling_price > 0)
                    <p>{{ number_format($product->selling_price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</p>
                    <del>{{ number_format($product->price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</del>
                    @else
                    <p>{{number_format($product->price, 2) }} {{ env('DEFAULT_CURRENCY') . "/ $product->units" }}</p>
                    @endif
                </td>
                <td align="center">
                    @if ($product->featured)
                    <a href="#" class="text-warning"><i class='bx bxs-star'></i></a>
                    @else
                    <a href="" class="text-dark"><i class='bx bxs-star'></i></a>
                    @endif

                </td>
                <td>
                    {{ $product->stock }}
                </td>
                <td>
                    {{ $product->status ? 'Active' : 'Inactive' }}
                </td>
                <td >
                    <div class="d-flex align-items-center">
                        <a href="#" class="text-primary"><i class='bx bx-edit-alt'></i></a>
                        <form href="{{ route('admin.product.destroy', $product->id) }}" method="POST" >
                            @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-sm text-danger"><i class='bx bx-trash-alt'></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center">
                    <p>No products were found</p>
                    <a href="#" class="btn btn-primary btn-sm">Create your first product</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection