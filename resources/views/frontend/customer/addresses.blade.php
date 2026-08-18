@extends('layouts.customerLayout')

@section('title', 'Addresses')

@section('content')
<!-- Content -->
<div class="container-xxl grow container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Saved Addresses</h5>
                </div>
                <div class="card-body">
                    <div class="text-center py-5">
                        <img src="{{ asset('frontend/img/plant 1.png') }}" alt="No Addresses" height="100" class="mb-3 opacity-50">
                        <h5 class="text-muted">No addresses saved</h5>
                        <p class="text-muted">You haven't saved any delivery addresses yet.</p>
                        <button type="button" class="btn btn-primary">Add New Address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
