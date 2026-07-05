@extends('layouts.backend')
@section('title', 'Create Category')
@section('content')
<div class="container">
    <div class="col-lg-5 mx-auto">
        <div class="card shadow">
            <div class="card-header">Add Category</div>
            <div class="card-body">
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Category Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" placeholder="Category Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Slug <span class="text-danger">*</span></label>
                        <input type="text" name="slug" placeholder="example: ac, dairy-product" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Category Image (Optional)</label>
                        <input type="file" name="img" placeholder="Category Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="details" class="form-control"></textarea>
                    </div>

                    <div class="d-flex gap-3 my-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="featured" type="checkbox" role="switch" id="featured"
                                >
                            <label class="form-check-label" for="switchCheckChecked">Featured</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="status" type="checkbox" role="switch" id="switchCheckChecked"
                                checked>
                            <label class="form-check-label" for="switchCheckChecked">Status</label>
                        </div>
                    </div>


                    <button class="btn btn-primary w-100 mt-3 d-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection