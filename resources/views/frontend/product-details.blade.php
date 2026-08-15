@extends('layouts.frontendLayout')

@section('title')
{{ $product->title }}
@endsection

@section('content')

<!--=========================
    Breadcrumb
==========================-->

<section id="shopBanner" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-items-center">

            <ul class="d-flex">

                <li>
                    <a href="{{ route('frontend.index') }}">
                        <iconify-icon icon="material-symbols:home-outline" width="22" height="22"></iconify-icon>
                    </a>
                </li>

                <li class="mx-2">></li>

                <li>
                    <a href="{{ route('frontend.shop') }}">
                        Shop
                    </a>
                </li>

                <li class="mx-2">></li>

                <li>
                    <a href="#">
                        {{ optional($product->category)->title }}
                    </a>
                </li>

                <li class="mx-2">></li>

                <li class="text-success">
                    {{ $product->title }}
                </li>

            </ul>

        </div>
    </div>
</section>

<!--=========================
    Product Details
==========================-->

<section id="productDetails">

    <div class="container">

        <div class="row">

            <!--=====================
                Product Images
            ======================-->

            <div class="col-lg-6">

                <div class="row">

                    <div class="col-2">

                        <div class="thumbImages">

                            <img
                                src="{{ asset('frontend/img/Malta.png')}}"
                                class="thumb active img-fluid"
                                alt="">

                            <img
                                src="{{ asset('frontend/img/Lettuce.png')}}"
                                class="thumb img-fluid"
                                alt="">

                            <img
                                src="{{ asset('frontend/img/Eggplant.png')}}"
                                class="thumb img-fluid"
                                alt="">

                            <img
                                src="{{ asset('frontend/img/Ladisfinger.png')}}"
                                class="thumb img-fluid"
                                alt="">

                        </div>

                    </div>

                    <div class="col-10">

                        <div class="mainImage">

                            <img
                                id="mainProductImage"
                                src="{{ asset('frontend/img/Tomato.png')}}"
                                class="img-fluid"
                                alt="{{ $product->title }}">

                        </div>

                    </div>

                </div>

            </div>



            <!--=====================
                Product Info
            ======================-->

            <div class="col-lg-6">

                <div class="productInfo">

                    <div class="titleArea">

                       <h2>{{ $product->title }}</h2>

                        @if($product->stock > 0)

                        <span class="stockBadge">

                            In Stock

                        </span>

                        @else

                        <span class="stockBadge bg-danger text-white">

                            Out Of Stock

                        </span>

                        @endif

                    </div>



                    <div class="ratingArea">

                        <iconify-icon icon="material-symbols:star"></iconify-icon>
                        <iconify-icon icon="material-symbols:star"></iconify-icon>
                        <iconify-icon icon="material-symbols:star"></iconify-icon>
                        <iconify-icon icon="material-symbols:star"></iconify-icon>
                        <iconify-icon icon="material-symbols:star"></iconify-icon>

                        <span>

                            (5 Reviews)

                        </span>

                    </div>



                    <div class="skuBrand">

                        <p>

                            <strong>

                                SKU :

                            </strong>

                           {{ $product->sku ?? 'N/A' }}

                        </p>

                        <p>

                            <strong>

                                Category :

                            </strong>

                            {{ $product->category->title ?? 'No Category' }}

                        </p>

                    </div>



                    <div class="priceArea">

                        @if($product->selling_price > 0)

                        <h3>

                          {{ number_format($product->selling_price,2) }} BDT

                        </h3>

                        <del>

                            {{ number_format($product->price,2) }}
                            BDT

                        </del>

                        @else

                        <h3>

                            {{ number_format($product->price,2) }}
                            BDT

                        </h3>

                        @endif

                    </div>



                    <hr>



                    <div class="description">

                        @if($product->short_description)

                        <p>

                            {{ $product->short_description }}

                        </p>

                        @endif

                    </div>



                    <hr>



                    <div class="cartArea">

                        <div class="quantityBox">

                            <button class="minusBtn">

                                -

                            </button>

                            <input
                                type="text"
                                id="qty"
                                value="1">

                            <button class="plusBtn">

                                +

                            </button>

                        </div>



                        <button class="addCartBtn">

                            Add To Cart

                            <iconify-icon
                                icon="clarity:shopping-bag-line">
                            </iconify-icon>

                        </button>



                        <button class="wishlistBtn">

                            <iconify-icon
                                icon="mdi:heart-outline">
                            </iconify-icon>

                        </button>

                    </div>



                    <hr>



                    <div class="shareArea">

                        <span>

                            Share :

                        </span>

                        <a href="#">

                            <iconify-icon icon="ri:facebook-fill"></iconify-icon>

                        </a>

                        <a href="#">

                            <iconify-icon icon="mdi:twitter"></iconify-icon>

                        </a>

                        <a href="#">

                            <iconify-icon icon="mdi:instagram"></iconify-icon>

                        </a>

                        <a href="#">

                            <iconify-icon icon="mdi:pinterest"></iconify-icon>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!--==================================
        PRODUCT DESCRIPTION
===================================-->

<section id="productDescription">

    <div class="container">

        <div class="descriptionBox">

            <ul class="nav nav-tabs" id="productTab" role="tablist">

                <li class="nav-item">

                    <button class="nav-link active"
                        data-bs-toggle="tab"
                        data-bs-target="#description">

                        Description

                    </button>

                </li>

                <li class="nav-item">

                    <button class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#information">

                        Additional Information

                    </button>

                </li>

                <li class="nav-item">

                    <button class="nav-link"
                        data-bs-toggle="tab"
                        data-bs-target="#shipping">

                        Shipping

                    </button>

                </li>

            </ul>



            <div class="tab-content mt-5">

                <!-- Description -->

                <div class="tab-pane fade show active"
                    id="description">

                    @if($product->description)

                        {!! $product->description !!}

                    @else

                        <p>

                            {{ $product->short_description }}

                        </p>

                    @endif

                </div>



                <!-- Additional -->

                <div class="tab-pane fade"
                    id="information">

                    <table class="table table-bordered">

                        <tr>

                            <th width="200">

                                Product Name

                            </th>

                            <td>

                                {{ $product->title }}

                            </td>

                        </tr>

                        <tr>

                            <th>

                                SKU

                            </th>

                            <td>

                                {{ $product->sku }}

                            </td>

                        </tr>

                        <tr>

                            <th>

                                Origin

                            </th>

                            <td>

                                {{ $product->origin }}

                            </td>

                        </tr>

                        <tr>

                            <th>

                                Unit

                            </th>

                            <td>

                                {{ $product->units }}

                            </td>

                        </tr>

                        <tr>

                            <th>

                                Stock

                            </th>

                            <td>

                                {{ $product->stock }}

                            </td>

                        </tr>

                        <tr>

                            <th>

                                Expiry Date

                            </th>

                            <td>

                                {{ $product->expiry_date }}

                            </td>

                        </tr>

                    </table>

                </div>



                <!-- Shipping -->

                <div class="tab-pane fade"
                    id="shipping">

                    <p>

                        We deliver products throughout Bangladesh.

                    </p>

                    <p>

                        Delivery time : 2 - 5 Working Days.

                    </p>

                    <p>

                        Cash On Delivery Available.

                    </p>

                    <p>

                        Return within 7 days if product is damaged.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>





<!--==================================
        PRODUCT TAG
===================================-->

<section class="productTags">

    <div class="container">

        <strong>

            Tags :

        </strong>

        <span>

            {{ $product->title }}

        </span>

    </div>

</section>





<!--==================================
        RELATED PRODUCTS
===================================-->

<section class="feature">

    <div class="container">

        <div class="featureHead">

            <h2>

                Related Products

            </h2>

            <img src="{{ asset('frontend/img/Line.png') }}">

        </div>



        <div class="swiper swiperFeature">

            <div class="swiper-wrapper">

                @foreach($relatedProducts as $item)

                <div class="swiper-slide">

                    <div class="featureCard">

                        <div class="featureImg">

                            <a href="{{ route('frontend.product.details',$item->id) }}">

                                <img
                                    class="img-fluid"
                                    src="{{ getImage($item->image) }}"
                                    alt="{{ $item->title }}">

                            </a>

                            <ul class="featureIcons">

                                <li>

                                    <a href="#">

                                        <iconify-icon
                                            icon="simple-line-icons:heart">
                                        </iconify-icon>

                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('frontend.product.details',$item->id) }}">

                                        <iconify-icon
                                            icon="bx:show">
                                        </iconify-icon>

                                    </a>

                                </li>

                            </ul>

                        </div>



                        <div class="featureCnt">

                            <a href="{{ route('frontend.product.details',$item->id) }}">

                                {{ $item->title }}

                            </a>



                            @if($item->selling_price > 0)

                            <p>

                                {{ number_format($item->selling_price,2) }}

                                BDT

                                <del>

                                    {{ number_format($item->price,2) }}

                                    BDT

                                </del>

                            </p>

                            @else

                            <p>

                                {{ number_format($item->price,2) }}

                                BDT

                            </p>

                            @endif



                            <div class="stars">

                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>
                                <iconify-icon icon="material-symbols:star"></iconify-icon>

                            </div>

                            <a href="#" class="cartBtn">

                                <iconify-icon
                                    icon="clarity:shopping-bag-line">
                                </iconify-icon>

                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>




<!--==================================
        SERVICE AREA
===================================-->

<section id="serviceArea">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-6">

                <div class="serviceCard">

                    <iconify-icon
                        icon="mdi:truck-fast-outline">
                    </iconify-icon>

                    <h5>

                        Free Shipping

                    </h5>

                    <p>

                        Free shipping on all orders over 1000 BDT

                    </p>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="serviceCard">

                    <iconify-icon
                        icon="mdi:headset">
                    </iconify-icon>

                    <h5>

                        Customer Support

                    </h5>

                    <p>

                        24 Hours Customer Support

                    </p>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="serviceCard">

                    <iconify-icon
                        icon="mdi:shield-check-outline">
                    </iconify-icon>

                    <h5>

                        Secure Payment

                    </h5>

                    <p>

                        100% Secure Payment System

                    </p>

                </div>

            </div>



            <div class="col-lg-3 col-md-6">

                <div class="serviceCard">

                    <iconify-icon
                        icon="mdi:refresh">
                    </iconify-icon>

                    <h5>

                        Easy Return

                    </h5>

                    <p>

                        7 Days Return Policy

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
