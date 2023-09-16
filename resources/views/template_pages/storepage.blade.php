<x-layouts.layout-template>



    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>TNTCELLULAR</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <x-core.search-custom />


    <div class="col-md-4 col-lg-2 sidebar">
        <div class="sidebar-box-2">
            <h2 class="heading mb-4"><a href="#">Sort</a></h2>
            <ul>
                <li><a href="/store">All</a></li>
                <li><a href="store?sort=title">Title (A-z)</a></li>
                <li><a href="store?sort=title-desc">Title (Z-a)</a></li>
                <li><a href="store?sort=price">Price (Lowest to Highest)</a></li>
                <li><a href="store?sort=price-desc">Price (Highest to Lowest)</a></li>

            </ul>
        </div>


        <div class="sidebar-box-2">
            <h2 class="heading mb-4"><a href="#">Filter</a></h2>
            <ul>
                <li><a href="/store">All</a></li>
                <li><a href="store?max_price=1000">Price less than $1000</a></li>
                <li><a href="store?max_price=2000">Price less than $2000</a></li>
                <li><a href="store?min_price=2000">Price greater than $2000</a></li>
                <li><a href="store?min_price=5000">Price greater than $5000</a></li>

            </ul>
        </div>


    </div>


    <!-- products -->
    <div class="product-section mt-150 mb-150">

        @if(empty($product_details) || $product_details->isEmpty())

        {{-- no results found --}}
        <x-core.store-empty />

        @else

        <div class="container">



            <!-- <div class="row">
                <div class="col-md-12"> -->
            <!--<div class="product-filters">
                         <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div> -->
            <!-- </div>
            </div> -->

            <div class="row product-lists">




                @foreach ($product_details as $data)

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div style="height: 500px" class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('store.details', ['id'=> $data->id]) }}"><img
                                    src="{{ asset('storage/' . $data->product_image1) }}" alt=""></a>
                        </div>
                        <h3>{{
                            $data->product_title }}</h3>
                        <p class="product-price">TTD {{ $data->product_price }} </p>
                        <a href="{{ route('store.details', ['id'=> $data->id]) }}" class="cart-btn"><i
                                class="fas fa-shopping-cart"></i> View</a>
                    </div>
                </div>

                @endforeach





            </div>

            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
        @endif
    </div>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->


</x-layouts.layout-template>