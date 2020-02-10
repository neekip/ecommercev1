@extends('layouts.front')

{{--@section('content')--}}
    {{--<!-- Main Content -->--}}
    {{--<main class="row">--}}
        {{--<div class="col-12 bg-white py-3 my-3">--}}
            {{--<div class="row">--}}

                {{--<!-- Product Images -->--}}
                {{--<div class="col-lg-5 col-md-12 mb-3">--}}
                    {{--<div class="col-12 mb-3">--}}
                        {{--<div class="img-large border" style="background-image: url('{{ url('public/images/'.$product->image)}}')"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Product Images -->--}}

                {{--<!-- Product Info -->--}}
                {{--<div class="col-lg-5 col-md-9">--}}
                    {{--<div class="col-12 product-name large">--}}
                        {{--{{ $product->name }}--}}
                    {{--</div>--}}
                    {{--<div class="col-12 px-0">--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                    {{--<div class="col-12">--}}
                        {{--<ul>--}}
                            {{--<li>Processor 8th Generation Intel Core i9-8950HK (6-Core, 12MB Cache, Overclocking up to 5.0GHz)</li>--}}
                            {{--<li>Memory 32GB DDR4-2666MHz, 2x16GB Ram Speed Gaming Performance</li>--}}
                            {{--<li>Hard Drive 1TB SSD RAID 0 (2x 512GB PCIe NVME M.2 SSDs) + 1TB (+8GB SSHD) Hybrid Drive</li>--}}
                            {{--<li>17.3" Full HD display 1920 x 1080 resolution boasts impressive color and clarity. IPS technology for wide viewing angles.</li>--}}
                            {{--<li>Video Card NVIDIA® GeForce® RTX 2080 with 8GB GDDR6</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Product Info -->--}}

                {{--<!-- Sidebar -->--}}
                {{--<div class="col-lg-2 col-md-3 text-center">--}}
                    {{--<div class="col-12 border-left border-top sidebar h-100">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12">--}}
                                {{--@if(!empty($product->discount))--}}
                                {{--<span class="detail-price">--}}
                                    {{--Rs. {{number_format($product->discount) }}--}}
                                {{--</span>--}}
                                {{--<span class="detail-price-old">--}}
                                  {{--Rs. {{number_format($product->price) }}--}}
                                {{--</span>--}}
                                {{--@else--}}
                                {{--<span class="detail-price">--}}
                                    {{--Rs. {{number_format($product->price) }}--}}
                                {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-5 col-md-9 col-sm-3 col-5 mx-auto mt-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label for="qty">Quantity</label>--}}
                                    {{--<input type="number" id="qty-{{ $product->product_code }}" min="1" value="1" class="form-control" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 mt-3">--}}
                                {{--<button class="btn btn-outline-dark add-to-cart" data-code="{{ $product->product_code  }}" data-price="{{ !empty($product->discount)? $product->discount : $product->price }}" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 mt-3">--}}
                                {{--<button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-heart mr-2"></i>Add to wishlist</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Sidebar -->--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-12 mb-3 py-3 bg-white text-justify">--}}
            {{--<div class="row">--}}

                {{--<!-- Details -->--}}
                {{--<div class="col-md-7">--}}
                    {{--<div class="col-12">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 text-uppercase">--}}
                                {{--<h2><u>Details</u></h2>--}}
                            {{--</div>--}}
                            {{--<div class="col-12" id="details">--}}
                                {{--{!! nl2br($product->description)  !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Details -->--}}

                {{--<!-- Ratings & Reviews -->--}}
                {{--<div class="col-md-5">--}}
                    {{--<div class="col-12 px-md-4 border-top border-left sidebar h-100">--}}

                        {{--<!-- Rating -->--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 mt-md-0 mt-3 text-uppercase">--}}
                                {{--<h2><u>Ratings & Reviews</u></h2>--}}
                            {{--</div>--}}
                            {{--<div class="col-12">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-4 text-center">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-12 average-rating">--}}
                                                {{--4.1--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12">--}}
                                                {{--of 100 reviews--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col">--}}
                                        {{--<ul class="rating-list mt-3">--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar bg-dark" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="rating-progress-label">--}}
                                                    {{--5<i class="fas fa-star ml-1"></i>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar bg-dark" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="rating-progress-label">--}}
                                                    {{--4<i class="fas fa-star ml-1"></i>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar bg-dark" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="rating-progress-label">--}}
                                                    {{--3<i class="fas fa-star ml-1"></i>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar bg-dark" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">7%</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="rating-progress-label">--}}
                                                    {{--2<i class="fas fa-star ml-1"></i>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar bg-dark" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="3" aria-valuemax="100">3%</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="rating-progress-label">--}}
                                                    {{--1<i class="fas fa-star ml-1"></i>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Rating -->--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-12 px-md-3 px-0">--}}
                                {{--<hr>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<!-- Add Review -->--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12">--}}
                                {{--<h4>Add Review</h4>--}}
                            {{--</div>--}}
                            {{--<div class="col-12">--}}
                                {{--<form>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<textarea class="form-control" placeholder="Give your review"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="d-flex ratings justify-content-end flex-row-reverse">--}}
                                            {{--<input type="radio" value="5" name="rating" id="rating-5"><label--}}
                                                {{--for="rating-5"></label>--}}
                                            {{--<input type="radio" value="4" name="rating" id="rating-4"><label--}}
                                                {{--for="rating-4"></label>--}}
                                            {{--<input type="radio" value="3" name="rating" id="rating-3"><label--}}
                                                {{--for="rating-3"></label>--}}
                                            {{--<input type="radio" value="2" name="rating" id="rating-2"><label--}}
                                                {{--for="rating-2"></label>--}}
                                            {{--<input type="radio" value="1" name="rating" id="rating-1" checked><label--}}
                                                {{--for="rating-1"></label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<button class="btn btn-outline-dark">Add Review</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Add Review -->--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-12 px-md-3 px-0">--}}
                                {{--<hr>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<!-- Review -->--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12">--}}

                                {{--<!-- Comments -->--}}
                                {{--<div class="col-12 text-justify py-2 mb-3 bg-gray">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-12">--}}
                                            {{--<strong class="mr-2">Steve Rogers</strong>--}}
                                            {{--<small>--}}
                                                {{--<i class="fas fa-star"></i>--}}
                                                {{--<i class="fas fa-star"></i>--}}
                                                {{--<i class="fas fa-star"></i>--}}
                                                {{--<i class="far fa-star"></i>--}}
                                                {{--<i class="far fa-star"></i>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12">--}}
                                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ullamcorper quam, non congue odio.--}}
                                            {{--<br>--}}
                                            {{--Fusce ligula augue, faucibus sed neque non, auctor rhoncus enim. Sed nec molestie turpis. Nullam accumsan porttitor rutrum. Curabitur eleifend venenatis volutpat.--}}
                                            {{--<br>--}}
                                            {{--Aenean faucibus posuere vehicula.--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12">--}}
                                            {{--<small>--}}
                                                {{--<i class="fas fa-clock mr-2"></i>5 hours ago--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- Comments -->--}}

                                {{--<!-- Comments -->--}}
                                {{--<div class="col-12 text-justify py-2 mb-3 bg-gray">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-12">--}}
                                            {{--<strong class="mr-2">Bucky Barns</strong>--}}
                                            {{--<small>--}}
                                                {{--<i class="fas fa-star"></i>--}}
                                                {{--<i class="fas fa-star"></i>--}}
                                                {{--<i class="far fa-star"></i>--}}
                                                {{--<i class="far fa-star"></i>--}}
                                                {{--<i class="far fa-star"></i>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12">--}}
                                            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ullamcorper quam, non congue odio.--}}
                                            {{--<br>--}}
                                            {{--Aenean faucibus posuere vehicula.--}}
                                        {{--</div>--}}
                                        {{--<div class="col-12">--}}
                                            {{--<small>--}}
                                                {{--<i class="fas fa-clock mr-2"></i>5 hours ago--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- Comments -->--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Review -->--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Ratings & Reviews -->--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Similar Product -->--}}
        {{--<div class="col-12">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 py-3">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-12 text-center text-uppercase">--}}
                            {{--<h2>Similar Products</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="col-lg-3 col-sm-6 my-3">--}}
                            {{--<div class="col-12 bg-white text-center h-100 product-item">--}}
                                {{--<div class="row h-100">--}}
                                    {{--<div class="col-12 p-0 mb-3">--}}
                                        {{--<a href="product.html">--}}
                                            {{--<img src="images/image-1.jpg" class="img-fluid">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                        {{--<a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                            {{--<span class="product-price-old">--}}
                                                {{--$500--}}
                                            {{--</span>--}}
                                        {{--<br>--}}
                                        {{--<span class="product-price">--}}
                                                {{--$500--}}
                                            {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3 align-self-end">--}}
                                        {{--<button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product -->--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="col-lg-3 col-sm-6 my-3">--}}
                            {{--<div class="col-12 bg-white text-center h-100 product-item">--}}
                                {{--<div class="row h-100">--}}
                                    {{--<div class="col-12 p-0 mb-3">--}}
                                        {{--<a href="product.html">--}}
                                            {{--<img src="images/image-2.jpg" class="img-fluid">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                        {{--<a href="product.html" class="product-name">Optoma 4K HDR Projector</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                            {{--<span class="product-price">--}}
                                                {{--$1,500--}}
                                            {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3 align-self-end">--}}
                                        {{--<button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product -->--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="col-lg-3 col-sm-6 my-3">--}}
                            {{--<div class="col-12 bg-white text-center h-100 product-item">--}}
                                {{--<div class="row h-100">--}}
                                    {{--<div class="col-12 p-0 mb-3">--}}
                                        {{--<a href="product.html">--}}
                                            {{--<img src="images/image-3.jpg" class="img-fluid">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                        {{--<a href="product.html" class="product-name">HP Envy Specter 360</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                        {{--<div class="product-price-old">--}}
                                            {{--$2,800--}}
                                        {{--</div>--}}
                                        {{--<span class="product-price">--}}
                                                {{--$2,500--}}
                                            {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3 align-self-end">--}}
                                        {{--<button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product -->--}}

                        {{--<!-- Product -->--}}
                        {{--<div class="col-lg-3 col-sm-6 my-3">--}}
                            {{--<div class="col-12 bg-white text-center h-100 product-item">--}}
                                {{--<div class="row h-100">--}}
                                    {{--<div class="col-12 p-0 mb-3">--}}
                                        {{--<a href="product.html">--}}
                                            {{--<img src="images/image-4.jpg" class="img-fluid">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                        {{--<a href="product.html" class="product-name">Dell Alienware Area 51</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3">--}}
                                            {{--<span class="product-price">--}}
                                                {{--$4,500--}}
                                            {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 mb-3 align-self-end">--}}
                                        {{--<button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- Product -->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Similar Products -->--}}

    {{--</main>--}}
    {{--<!-- Main Content -->--}}
{{--@endsection--}}

@section('content')
    <!-- Main Content -->
    <main class="row">
        <div class="col-12 bg-white py-3 my-3">
            <!-- Book detail -->



            <div class="row">

                <!-- Product Images -->
                <div class="col-lg-5 col-md-12 mb-3">
                    <div class="col-md-8 offset-md-2 mb-3 ribbon-head">
                        BOOK DETAIL
                    </div>
                    <div class="col-12 mb-3">
                        <div class="img-large" style="background-image: url('{{ url('public/images/'.$product->image) }}')"></div>
                    </div>
                </div>
                <!-- Product Images -->


                <!-- Product Info -->
                <div class="col-lg-5 col-md-9">
                    <div class="col-12 product-name large">
                        {{ $product->name }}
                    </div>
                    <div class="col-12 px-0">
                        <hr>
                    </div>
                    <div class="col-12 book-detail">
                        <p>
                            <span>Author: </span>
                            {{ $product->author }}
                        </p>
                        <p>
                            <span>Genre: </span>
                            {{ $product->category->name }}
                        </p>
                        <p>
                            <span>Binding: </span>
                            Soft Cover
                        </p>
                        <p>
                            <span>Description: </span>
                            {!! $product->description  !!}
                        </p>
                    </div>
                </div>
                <!-- Product Info -->

                <!-- Sidebar -->
                <div class="col-lg-2 col-md-3 text-center">
                    <div class="col-12 border-left border-top sidebar h-100">
                        <div class="row">
                            <div class="col-12">
                                @if(!empty($product->discount))
                                    <span class="detail-price">
                                    Rs. {{ number_format($product->discount) }}
                                </span>
                                    <span class="detail-price-old">
                                    Rs. {{ number_format($product->price) }}
                                </span>
                                @else
                                    <span class="detail-price">
                                    Rs. {{ number_format($product->price) }}
                                </span>
                                @endif
                            </div>
                            <div class="col-xl-5 col-md-9 col-sm-3 col-5 mx-auto mt-3">
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <input type="number" id="qty-{{ $product->product_code }}" min="1" value="1" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-outline-dark add-to-cart" data-code="{{ $product->product_code }}" data-price="{{ !empty($product->discount) ? $product->discount : $product->price }}" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-heart mr-2"></i>Add to wishlist</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->

            </div>
        </div>

        <div class="col-12 mb-3 py-3 bg-white text-justify">
            <div class="row">

                {{--<!-- Details -->--}}
                {{--<div class="col-md-7">--}}
                    {{--<div class="col-12">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 text-uppercase">--}}
                                {{--<h2><u>Details</u></h2>--}}
                            {{--</div>--}}
                            {{--<div class="col-12" id="details">--}}
                                {{--{!! nl2br($product->description) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Details -->--}}

                <!-- Ratings & Reviews -->
                <div class="col-md-12 offset-md-2">
                    <div class="col-8 px-md-4 border-top sidebar h-100">

                        <!-- Rating -->
                        <div class="row">
                            <div class="col-8 mt-md-0 mt-3 text-uppercase">
                                <h2><u>Ratings & Reviews</u></h2>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <div class="row">
                                            <div class="col-12 average-rating">
                                                {{ number_format($avg, 1) }}
                                            </div>
                                            <div class="col-12">
                                                of {{ $total }} reviews
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <ul class="rating-list mt-3">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratings[5] }}%;" aria-valuenow="{{ $ratings[5] }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($ratings[5], 2) }}%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    5<i class="fas fa-star ml-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratings[4] }}%;" aria-valuenow="{{ $ratings[4] }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($ratings[4], 2) }}%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    4<i class="fas fa-star ml-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratings[3] }}%;" aria-valuenow="{{ $ratings[3] }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($ratings[3], 2) }}%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    3<i class="fas fa-star ml-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratings[2] }}%;" aria-valuenow="{{ $ratings[2] }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($ratings[2], 2) }}%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    2<i class="fas fa-star ml-1"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratings[1] }}%;" aria-valuenow="{{ $ratings[1] }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($ratings[1], 2) }}%</div>
                                                </div>
                                                <div class="rating-progress-label">
                                                    1<i class="fas fa-star ml-1"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rating -->

                        <div class="row">
                            <div class="col-12 px-md-3 px-0">
                                <hr>
                            </div>
                        </div>

                        <!-- Add Review -->
                        <div class="row">
                            <div class="col-12">
                                <h4>Add Review</h4>
                            </div>
                            <div class="col-12">
                                @auth('web')
                                    {{ Form::open(['method' => 'post', 'route' => ['front.review', $product->product_code]]) }}
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control" placeholder="Give your review" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex ratings justify-content-end flex-row-reverse">
                                            <input type="radio" value="5" name="rating" id="rating-5"><label
                                                for="rating-5"></label>
                                            <input type="radio" value="4" name="rating" id="rating-4"><label
                                                for="rating-4"></label>
                                            <input type="radio" value="3" name="rating" id="rating-3"><label
                                                for="rating-3"></label>
                                            <input type="radio" value="2" name="rating" id="rating-2"><label
                                                for="rating-2"></label>
                                            <input type="radio" value="1" name="rating" id="rating-1" checked><label
                                                for="rating-1"></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-outline-dark">Add Review</button>
                                    </div>
                                    {{ Form::close() }}
                                @else
                                    <h5 class="text-center"><em>Please <a href="{{ route('login') }}">Login</a> to give your review.</em></h5>
                                @endauth
                            </div>
                        </div>
                        <!-- Add Review -->

                        <div class="row">
                            <div class="col-12 px-md-3 px-0">
                                <hr>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="row">
                            <div class="col-12">

                            @if(!$reviews->isEmpty())
                                @foreach($reviews as $review)
                                    <!-- Comments -->
                                        <div class="col-12 text-justify py-2 mb-3 bg-gray">
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong class="mr-2">{{ $review->user->name }}</strong>
                                                    <small>
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $review->rating)
                                                                <i class="fas fa-star"></i>
                                                            @else
                                                                <i class="far fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </small>
                                                </div>
                                                <div class="col-12">
                                                    {!! nl2br($review->comment) !!}
                                                </div>
                                                <div class="col-12">
                                                    <small>
                                                        <i class="fas fa-clock mr-2"></i>{{ $review->created_at->diffForHumans() }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comments -->
                                @endforeach
                            @else
                                <!-- Comments -->
                                    <div class="col-12 text-justify py-2 mb-3 bg-gray">
                                        <h5 class="text-center"><em>No review added yet.</em></h5>
                                    </div>
                                    <!-- Comments -->
                                @endif
                            </div>
                        </div>
                        <!-- Review -->

                    </div>
                </div>
                <!-- Ratings & Reviews -->

            </div>
        </div>

    @if(!$similar->isEmpty())
        <!-- Similar Product -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 py-3">
                        <div class="row">
                            <div class="col-12 text-center text-uppercase">
                                <h2>Similar Products</h2>
                            </div>
                        </div>
                        <div class="row">

                        @foreach($similar as $related)
                            <!-- Product -->
                                <div class="col-lg-3 col-sm-6 my-3">
                                    <div class="col-12 bg-white text-center h-100 product-item">
                                        <div class="row h-100">
                                            <div class="col-12 p-0 mb-3">
                                                <a href="{{ route('front.product', $related->product_code) }}">
                                                    @if(!empty($related->image))
                                                        <div class="product-image" style="background-image: url('{{ url('public/images/'.$related->image) }}')"></div>
                                                    @else
                                                        <div class="product-image" style="background-image: url('{{ url('public/images/no-image.png') }}')"></div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <a href="{{ route('front.product', $related->product_code) }}" class="product-name">{{ $related->name }}</a>
                                            </div>
                                            <div class="col-12 mb-3">
                                                @if(!empty($related->discount))
                                                    <span class="product-price-old">
                                            Rs. {{ number_format($related->price) }}
                                        </span>
                                                    <br>
                                                    <span class="product-price">
                                            Rs. {{ number_format($related->discount) }}
                                        </span>
                                                @else
                                                    <span class="product-price">
                                            Rs. {{ number_format($related->price) }}
                                        </span>
                                                @endif
                                            </div>
                                            <div class="col-12 mb-3 align-self-end">
                                                <button class="btn btn-outline-dark add-to-cart" data-code="{{ $related->product_code }}" data-price="{{ !empty($related->discount) ? $related->discount : $related->price }}" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                                <input type="hidden" id="qty-{{ $related->product_code }}" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Similar Products -->
        @endif

    </main>
    <!-- Main Content -->
@endsection

