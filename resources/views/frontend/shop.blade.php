@extends('layouts.frontendLayout')
@section('title')
Shop
@endsection
@section('content')


<section id="shopBanner" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-item-center">
            <ul class="d-flex">
                <li><a href="{{ route('frontend.index') }}">
                        <iconify-icon icon="material-symbols:home-outline" width="24" height="24"></iconify-icon> >
                    </a></li>
                <li><a href="{{ route('frontend.shop') }}"> Shop </a></li>
                @if (request()->category)
                <li>> <a href="#"> {{ $categories->where('slug', request()->category)->first()->title ?? '' }} </a></li>
                @endif
            </ul>
        </div>
    </div>
</section>
<section id="filter" class="d-none d-lg-flex justify-content-center mb-3">
    <form action="">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Filters: Category, Price, Rating -->
                <div class="leftFilter col-lg-6 d-flex gap-2">
                    <div class="w-100">
                        <select class="form-select" aria-label="Select Category" name="category">
                            <option selected disabled>Select Category</option>
                            @foreach ($categories as $category)
                            <option {{ request()->category == $category->slug ? 'selected' : '' }} value="{{ $category->slug }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-100">
                        <select class="form-select" aria-label="Select Price">
                            <option selected disabled>Select Price</option>
                            <option value="0-10">0$ - 10$</option>
                            <option value="10-20">10$ - 20$</option>
                            <option value="20-30">20$ - 30$</option>
                            <option value="30-40">30$ - 40$</option>
                            <option value="40-50">40$ - 50$</option>
                            <option value="50-60">50$ - 60$</option>
                            <option value="60-70">60$ - 70$</option>
                            <option value="70-80">70$ - 80$</option>
                            <option value="80-90">80$ - 90$</option>
                            <option value="90-100">90$ - 100$</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <select class="form-select" aria-label="Select Rating">
                            <option selected disabled>Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                </div>
                <!-- Right Filters: Sort by, Show count -->
                <div class="rightFilter col-lg-6 d-flex gap-2 ms-auto justify-end">
                    <div class="ms-auto w-auto">
                        <select class="form-select" aria-label="Sort by">
                            <option selected>Sort by: Latest</option>
                            <option value="popularity">Popularity</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                        </select>
                    </div>
                    <div class="w-auto">
                        <select class="form-select" aria-label="Show items">
                            <option selected>Show: 16</option>
                            <option value="32">32</option>
                            <option value="48">48</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Apply</button>
                </div>
            </div>
        </div>
    </form>
</section>
<section id="activeFilter" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-start">
                <p> Active Filters: <b>Wing Chair</b>
                    <iconify-icon icon="hugeicons:cancel-01"></iconify-icon> <b>Min $300 - Max 500</b>
                    <iconify-icon icon="hugeicons:cancel-01"></iconify-icon>
                </p>
            </div>
            <div class="col-lg-6 text-end">
                <p><b>2,547</b> Results found.</p>
            </div>
        </div>
    </div>
</section>
<section id="activeFilterMbl" class="d-lg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="mblFilterHeader">
                    <button class="filterBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas"
                        aria-controls="filterOffcanvas">
                        <iconify-icon icon="mdi:filter-variant"></iconify-icon>
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="filterOffcanvasLabel">Filter Products</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="filterSection">
                <h6 class="filterTitle">Category</h6>
                <div class="filterOptions">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="vegetables" id="categoryVegetables">
                        <label class="form-check-label" for="categoryVegetables">Vegetables</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="fruits" id="categoryFruits">
                        <label class="form-check-label" for="categoryFruits">Fruits</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="meat" id="categoryMeat">
                        <label class="form-check-label" for="categoryMeat">Meat</label>
                    </div>
                </div>
            </div>

            <div class="filterSection">
                <h6 class="filterTitle">Price Range</h6>
                <div class="priceRange">
                    <div class="priceInputs">
                        <input type="number" class="form-control" id="minPrice" placeholder="Min" min="0">
                        <span class="priceSeparator">-</span>
                        <input type="number" class="form-control" id="maxPrice" placeholder="Max" min="0">
                    </div>
                    <div class="priceSlider">
                        <input type="range" class="form-range" id="priceRange" min="0" max="100" value="50">
                    </div>
                </div>
            </div>

            <div class="filterSection">
                <h6 class="filterTitle">Rating</h6>
                <div class="ratingOptions">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" id="rating5">
                        <label class="form-check-label" for="rating5">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="rating4">
                        <label class="form-check-label" for="rating4">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="rating3">
                        <label class="form-check-label" for="rating3">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="rating2">
                        <label class="form-check-label" for="rating2">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="rating1">
                        <label class="form-check-label" for="rating1">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="filterActions">
                <button class="btn btn-primary applyFilters">Apply Filters</button>
                <button class="btn btn-outline-secondary clearFilters">Clear All</button>
            </div>
        </div>
    </div>
</section>
<section id="shopAreaOne">
    <div class="container">
        <div class="row align-items-center">
            @foreach($products as $product)
            <div class="col-6 col-lg-3 mb-3">
                <div class="featureCard">
                    <div class="featureImg">
                        <a href="#"><img class="img-fluid" src="{{ getImage($product->image) }}"
                                alt="{{ $product->title }}"></a>
                        <ul class="featureIcons">
                            <li><a href="#">
                                    <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="bx:show"></iconify-icon>
                                </a></li>
                        </ul>
                    </div>
                    <div class="featureCnt">
                        <a href="#">{{ $product->title }}</a>
                        @if ($product->selling_price && $product->selling_price > 0)
                        <p>{{ number_format($product->selling_price, 2) }} BDT <del class="ms-2"
                                style="color:#7a7a7a; font-size:12px">{{ number_format($product->price, 2) }} BDT</del>
                        </p>
                        @else
                        <p>{{ number_format($product->price, 2) }} BDT</p>
                        @endif
                        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn">
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>





@endsection