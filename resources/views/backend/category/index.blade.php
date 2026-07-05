@extends('layouts/contentNavbarLayout')

@section('title', 'Categories')

@section('content')
<h4 class="fw-bold py-3 mb-4">Category Management</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Create New Category</h5>
      <div class="card-body">
        
        <!-- YOUR NEW FORM GOES HERE -->
        <form action="#" method="POST">
          @csrf
          <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="Vegetables" required />
          </div>
          
          <button type="submit" class="btn btn-primary">Save Category</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection