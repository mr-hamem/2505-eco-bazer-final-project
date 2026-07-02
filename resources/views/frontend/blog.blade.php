@extends('layouts.frontendLayout')

@section('title')
Our Blog - Ecobazar
@endsection

@section('content')
<div class="py-4 text-white" style="background: url('{{ asset('frontend/img/Discount Bannar.png') }}') no-repeat center center/cover; background-color: #1a1a1a;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 align-items-center">
                <li class="breadcrumb-item"><a href="#" class="text-white-50 text-decoration-none"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active text-success fw-medium" aria-current="page" style="color: #00b207 !important;">Blog</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/blog-1.jpg') }}" class="card-img-top object-fit-cover" alt="Blog Title" style="height: 240px;">
                                <span class="position-absolute bottom-0 start-0 m-3 badge px-3 py-2 text-white fw-medium" style="background-color: #00b207; border-radius: 20px;">25 JUN</span>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex gap-3 text-muted small mb-2">
                                    <span><i class="bx bx-tag-alt text-success me-1"></i> Food & Health</span>
                                    <span><i class="bx bx-user me-1"></i> By Admin</span>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">
                                    <a href="#" class="text-decoration-none text-dark hover-green">6 Ways to Prepare Healthy Meals on a Budget</a>
                                </h5>
                                <p class="text-muted small lh-lg mb-3">
                                    Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros.
                                </p>
                                <a href="#" class="fw-semibold text-decoration-none small align-items-center d-inline-flex" style="color: #00b207;">
                                    Read More <i class="bx bx-right-arrow-alt ms-1 fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/blog-2.jpg') }}" class="card-img-top object-fit-cover" alt="Blog Title" style="height: 240px;">
                                <span class="position-absolute bottom-0 start-0 m-3 badge px-3 py-2 text-white fw-medium" style="background-color: #00b207; border-radius: 20px;">18 JUN</span>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex gap-3 text-muted small mb-2">
                                    <span><i class="bx bx-tag-alt text-success me-1"></i> Organic</span>
                                    <span><i class="bx bx-user me-1"></i> By Admin</span>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">
                                    <a href="#" class="text-decoration-none text-dark hover-green">Why Organic Farming Matters to Our Ecosystem</a>
                                </h5>
                                <p class="text-muted small lh-lg mb-3">
                                    Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque euismod diam.
                                </p>
                                <a href="#" class="fw-semibold text-decoration-none small align-items-center d-inline-flex" style="color: #00b207;">
                                    Read More <i class="bx bx-right-arrow-alt ms-1 fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/blog-3.jpg') }}" class="card-img-top object-fit-cover" alt="Blog Title" style="height: 240px;">
                                <span class="position-absolute bottom-0 start-0 m-3 badge px-3 py-2 text-white fw-medium" style="background-color: #00b207; border-radius: 20px;">12 JUN</span>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex gap-3 text-muted small mb-2">
                                    <span><i class="bx bx-tag-alt text-success me-1"></i> Lifestyle</span>
                                    <span><i class="bx bx-user me-1"></i> By Admin</span>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">
                                    <a href="#" class="text-decoration-none text-dark hover-green">Top 10 Detox Smoothies to Start Your Summer Days</a>
                                </h5>
                                <p class="text-muted small lh-lg mb-3">
                                    Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan donec a eros.
                                </p>
                                <a href="#" class="fw-semibold text-decoration-none small align-items-center d-inline-flex" style="color: #00b207;">
                                    Read More <i class="bx bx-right-arrow-alt ms-1 fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <nav class="mt-5">
                    <ul class="pagination justify-content-center gap-2">
                        <li class="page-item disabled"><a class="page-item rounded-circle d-flex align-items-center justify-content-center shadow-sm text-dark border-0" href="#" style="width: 40px; height: 40px;"><i class="bx bx-chevron-left fs-4"></i></a></li>
                        <li class="page-item active"><a class="page-item rounded-circle d-flex align-items-center justify-content-center shadow-sm text-white border-0" href="#" style="width: 40px; height: 40px; background-color: #00b207;">1</a></li>
                        <li class="page-item"><a class="page-item rounded-circle d-flex align-items-center justify-content-center shadow-sm text-dark border-0 bg-white" href="#" style="width: 40px; height: 40px;">2</a></li>
                        <li class="page-item"><a class="page-item rounded-circle d-flex align-items-center justify-content-center shadow-sm text-dark border-0 bg-white" href="#" style="width: 40px; height: 40px;"><i class="bx bx-chevron-right fs-4"></i></a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    
                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <h6 class="fw-bold mb-3" style="color: #1a1a1a;">Search Blog</h6>
                        <form action="#" method="GET" class="position-relative">
                            <input type="text" class="form-control rounded-pill pe-5 py-2 shadow-none border" placeholder="Search articles...">
                            <button type="submit" class="btn border-0 position-absolute end-0 top-50 translate-middle-y me-2 text-muted"><i class="bx bx-search fs-5"></i></button>
                        </form>
                    </div>

                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <h6 class="fw-bold mb-3" style="color: #1a1a1a;">Top Categories</h6>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small text-muted">
                            <li class="d-flex justify-content-between align-items-center"><a href="#" class="text-decoration-none text-dark hover-green">Healthy Eating</a> <span>(12)</span></li>
                            <li class="d-flex justify-content-between align-items-center"><a href="#" class="text-decoration-none text-dark hover-green">Fresh Produce</a> <span>(8)</span></li>
                            <li class="d-flex justify-content-between align-items-center"><a href="#" class="text-decoration-none text-dark hover-green">Diet Tips</a> <span>(5)</span></li>
                            <li class="d-flex justify-content-between align-items-center"><a href="#" class="text-decoration-none text-dark hover-green">Organic Recipes</a> <span>(19)</span></li>
                        </ul>
                    </div>

                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <h6 class="fw-bold mb-3" style="color: #1a1a1a;">Recent Posts</h6>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/img/blog-1.jpg') }}" class="rounded-3 object-fit-cover" style="width: 64px; height: 64px;" alt="">
                                <div>
                                    <a href="#" class="fw-semibold text-dark text-decoration-none small d-block mb-1 hover-green line-clamp-2">Fresh veggies are back on season</a>
                                    <span class="text-muted small" style="font-size: 0.8rem;"><i class="bx bx-calendar me-1"></i> Jun 22, 2026</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/img/blog-2.jpg') }}" class="rounded-3 object-fit-cover" style="width: 64px; height: 64px;" alt="">
                                <div>
                                    <a href="#" class="fw-semibold text-dark text-decoration-none small d-block mb-1 hover-green line-clamp-2">The ultimate salad making blueprint</a>
                                    <span class="text-muted small" style="font-size: 0.8rem;"><i class="bx bx-calendar me-1"></i> Jun 14, 2026</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .hover-green:hover {
        color: #00b207 !important;
        transition: color 0.2s ease-in-out;
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
</style>
@endsection