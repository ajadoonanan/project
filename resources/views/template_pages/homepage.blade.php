<x-layouts.layout-template>

    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Welcome To</p>
                            <h1>TNTCELLULAR</h1>

                            <div class="hero-btns">
                                <a href="shop.html" class="boxed-btn">About Us</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- product section -->
    <div class="product-section mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Featured</span> Products</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($random as $data )

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('store.details', ['id'=> $data->id]) }}"><img
                                    src="{{ asset('storage/' . $data->product_image1) }}"></a>
                        </div>
                        <h3>{{$data->product_title }}</h3>
                        <p class="product-price">TTD {{ $data->product_price }} </p>
                        <a href="{{ route('store.details', ['id'=> $data->id]) }}" class="cart-btn"><i
                                class="fas fa-shopping-cart"></i> View</a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>

    <div class="product-section mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Best</span> Sellers</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($best_selling_products as $data )

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('store.details', ['id'=> $data->id]) }}"><img
                                    src="{{ asset('storage/' . $data->product_image1) }}"></a>
                        </div>
                        <h3>{{$data->product_title }}</h3>
                        <p class="product-price">TTD {{ $data->product_price }} </p>
                        <a href="{{ route('store.details', ['id'=> $data->id]) }}" class="cart-btn"><i
                                class="fas fa-shopping-cart"></i> View</a>
                    </div>
                </div>

                @endforeach

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



    <script type='text/javascript'>
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
    </script>



</x-layouts.layout-template>