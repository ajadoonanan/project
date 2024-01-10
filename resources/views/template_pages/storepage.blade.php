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


    <div class="row">
        <div class="col-md-4 col-lg-2 sidebar">
            <div class="sidebar-box-2">
                <h3 class="heading mb-2"><a href="#">Sort</a></h3>
                <ul>
                    <li><a href="/store">All</a></li>
                    <li><a href="store?sort=title">Title (A-z)</a></li>
                    <li><a href="store?sort=title-desc">Title (Z-a)</a></li>
                    <li><a href="store?sort=price">Price (Lowest to Highest)</a></li>
                    <li><a href="store?sort=price-desc">Price (Highest to Lowest)</a></li>

                </ul>
            </div>


            <div class="sidebar-box-2">
                <h3 class="heading mb-2"><a href="#">Filter</a></h3>
                <ul>
                    <li><a href="/store">All</a></li>
                    <!--<li><a href="store?max_price=1000">Price less than $1000</a></li>-->
                    <li><a href="store?max_price=2000">Price less than $2000</a></li>
                    <li><a href="store?min_price=2000">Price greater than $2000</a></li>
                    <!--<li><a href="store?min_price=5000">Price greater than $5000</a></li>-->

                </ul>
            </div>


        </div>
        <div class="col-md-8">
            <!-- products -->
            <div class="product-section">

                @if(empty($product_details) || $product_details->isEmpty())

                {{-- no results found --}}
                <x-core.store-empty />

                @else

                <div class="row product-lists" style="width: 130%;">

                    @foreach ($product_details as $data)

                    <div class="col-lg-4 col-md-6 text-center strawberry" style="">
                        <div style="height: 500px; width: 400px;" class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('store.details', ['id'=> $data->id]) }}"><img
                                        src="{{ asset('storage/' . $data->product_image1) }}" alt=""></a>
                            </div>
                            <h3>{{
                                $data->product_title }}</h3>
                            <p class="product-priace">TTD {{ $data->product_price }} </p>
                            <a href="{{ route('store.details', ['id'=> $data->id]) }}" class="cart-btn"><i
                                    class="fas fa-shopping-cart"></i> View</a>
                        </div>
                    </div>

                    @endforeach

                </div>

                @endif
                <!-- end products -->

            </div>
        </div>
    </div>



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



    <!-- <script type='text/javascript'>
        (function(I, L, T, i, c, k, s) {
            if(I.iticks) return;
            I.iticks = {
                host:c,
                settings:s,
                clientId:k,
                cdn:L,
                queue:[]
            };
            var h = T.head || T.documentElement;
            var e = T.createElement(i);
            var l = I.location;
            e.async = true;
            e.src = (L||c)+'/client/inject-v2.min.js';
            h.insertBefore(e, h.firstChild);
            I.iticks.call = function(a, b) {
                I.iticks.queue.push([a, b]);
            };
        })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '5ajhSjN5jBavRzuXR_c', {});
    </script> -->



</x-layouts.layout-template>