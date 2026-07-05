@extends('layouts.backend')

@section('title', 'Category')
@section('content')
    
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Total Categories
                    </div>
                    <div class="card-body">
                        <h1>0</h1>
                    </div>
                </div>
            </div>
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
                       Best Categories
                    </div>
                    <div class="card-body">
                        <h1>0</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Inactive Categories
                    </div>
                    <div class="card-body">
                        <h1>0</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-8">
            <form action="">
                @csrf
                <div class="d-flex gap-2 align-items-center">
                    <div class="form-group">
                        <label for="">Search Category</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="">
                        <label for="">Empty Category</label>
                    </div>
                    <button class="btn btn-sm btn-success"> Filter</button>
                </div>
                
            </form>
            </div>
            <div class="col-lg-2"><a href="{{ route('admin.category.create') }}" class="btn btn-primary">+ Add Category</a></div>
        </div>


    </div>

    <div class="container">
        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <td>Sl</td>
                    <td>Category</td>
                    <td>Total Products</td>
                    <td>Description</td>
                    <td>Featured</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

@endsection