@extends('layouts.backend')

@section('title', 'Customer')

@section('content')
<div class="container bg-white p-4 rounded shadow-sm">
        
        <div class="p-4 rounded-3 mb-4 text-white" style="background-color: #0b2f1d;">
            <p class="small text-uppercase mb-1 text-white">Customer Management</p>
            <h2 class="fw-bold text-white m-0">My Customers</h2>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card h-100 border-light shadow-sm p-3 d-flex flex-row align-items-center">
                    <div class="p-3 bg-success bg-opacity-10 text-white rounded-3 me-3 fs-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="bi bi-box"></i>
                    </div>
                    <div>
                        <p class="text-muted small mb-1">Total Customers</p>
                        <h3 class="fw-bold mb-0">8</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-light shadow-sm p-3 d-flex flex-row align-items-center">
                    <div class="p-3 bg-success bg-opacity-10 text-white rounded-3 me-3 fs-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div>
                        <p class="text-muted small mb-1">Total Sales</p>
                        <h3 class="fw-bold mb-0">৳ 4,64,750</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-light shadow-sm p-3 d-flex flex-row align-items-center">
                    <div class="p-3 bg-primary bg-opacity-10 text-white rounded-3 me-3 fs-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="bi bi-calendar-event"></i>
                    </div>
                    <div>
                        <p class="text-muted small mb-1">VIP Customers</p>
                        <h3 class="fw-bold mb-0">2</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div class="input-group" style="max-width: 450px;">
                <span class="input-group-text bg-white border-end-0 text-muted">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Name, Phone or Product">
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-success px-4 rounded-3 text-white" style="background-color: #0b2f1d; border-color: #0b2f1d;">All</button>
                <button class="btn btn-light bg-opacity-10 px-4 border text-muted rounded-3">VIP</button>
                <button class="btn btn-light bg-opacity-10 px-4 border text-muted rounded-3">Active</button>
                <button class="btn btn-light bg-opacity-10 px-4 border text-muted rounded-3">New</button>
            </div>
        </div>

        <div class="d-flex flex-column gap-3">
            
            <div class="card border-light shadow-sm p-3">
                <div class="row align-items-center g-3">
                    <div class="col-auto">
                        <div class="bg-success bg-opacity-10 text-black fw-bold rounded-circle d-flex align-items-center justify-content-center fs-5" style="width: 50px; height: 50px;">
                            R
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <h5 class="mb-0 fw-bold text-dark">Rohim Uddin</h5>
                            <span class="badge bg-success bg-opacity-10 text-white text-uppercase" style="font-size: 0.75rem;">Active</span>
                        </div>
                        <p class="text-muted small mb-0">01712-345678</p>
                    </div>
                    <div class="col-md-auto text-md-center my-2 my-md-0">
                        <span class="badge text-dark p-2 px-3 m-1" style="background-color: #fdf2e9; color: #a04000 !important;">KOTON PAJAMAS</span>
                        <span class="badge text-dark p-2 px-3 m-1" style="background-color: #fdf2e9; color: #a04000 !important;">LEATHER SANDALS</span>
                    </div>
                    <div class="col-auto text-end ms-auto">
                        <h5 class="fw-bold mb-0">৳ 45,600</h5>
                        <small class="text-muted">12 Orders</small>
                    </div>
                </div>
            </div>

            <div class="card border-light shadow-sm p-3">
                <div class="row align-items-center g-3">
                    <div class="col-auto">
                        <div class="bg-purple bg-opacity-10 text-purple fw-bold rounded-circle d-flex align-items-center justify-content-center fs-5" style="width: 50px; height: 50px; background-color: #f4ecf7; color: #8e44ad;">
                            F
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <h5 class="mb-0 fw-bold text-dark">Fatema Akter</h5>
                            <span class="badge bg-warning bg-opacity-10 text-white text-uppercase" style="font-size: 0.75rem;">VIP</span>
                        </div>
                        <p class="text-muted small mb-0">01823-119900</p>
                    </div>
                    <div class="col-md-auto text-md-center my-2 my-md-0">
                        <span class="badge text-dark p-2 px-3 m-1" style="background-color: #f5eeeb; color: #6c3483 !important;">SILK SARI</span>
                        <span class="badge text-dark p-2 px-3 m-1" style="background-color: #f5eeeb; color: #6c3483 !important;">GOLD PLATED EARRINGS</span>
                        <span class="text-muted small ms-1">+1</span>
                    </div>
                    <div class="col-auto text-end ms-auto">
                        <h5 class="fw-bold mb-0">৳ 1,18,250</h5>
                        <small class="text-muted">27 Orders</small>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection