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
                        <h1>0</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Featured Products
                    </div>
                    <div class="card-body">
                        <h1>0</h1>
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
                        0
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
            <div class="col-lg-2"><a href="{{ route('admin.product.create') }}" class="btn btn-primary">+ Add Product</a></div>
        </div>


    </div>

    <div class="container">
        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Product</td>
                    <td>Category</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Featured</td>
                    <td>Stock</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>

@endsection