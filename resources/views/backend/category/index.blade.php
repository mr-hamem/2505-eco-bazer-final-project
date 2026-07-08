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
                        <h1>{{ $categories->count() }}</h1>
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
                        <h1>{{ $categories->where('status', 0)->count() }}</h1>
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
                        <label for="">Search Category</label>
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
                        <input type="checkbox" class="" name="empty_category" value="{{ true }}">
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
            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $category->title }}</td>
                        <td>0</td>
                        <td>{{ strlen($category->details) == 0 ? '---' : (strlen($category->details) > 25 ? substr($category->details, 0, 25) . '...' : $category->details) }}</td>
                        <td>
                            @if ($category->featured)
                                <span class="badge bg-success">Yes</span>
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </td>
                        <td>
                            @if ($category->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
    </div>

@endsection