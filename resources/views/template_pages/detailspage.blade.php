<x-layouts.layout-template>



    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Single Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset('storage/' . $data->product_image1) }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $data->product_title }}</h3>
                        <p class="single-product-pricing">TTD {{ $data->product_price }}</p>
                        <p>{!! $data->product_description !!}</p>
                        <div class="single-product-form">
                            <form action="{{ route('cart') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input name="cart_quantity" type="number" value="1">

                                <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to
                                    Cart</button>

                                <input type="hidden" name="product_id" value="{{ $data->id }}">

                            </form>
                            {{-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to
                                Cart</a> --}}
                            {{-- <p><strong>Categories: </strong>Fruits, Organic</p> --}}
                        </div>
                        {{-- <h4>Share:</h4> --}}
                        {{-- <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Recommended</span> Products</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($recommendedProducts as $data)

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="{{ asset('storage/' . $data->product_image1) }}"
                                    alt=""></a>
                        </div>
                        <h3>{{$data->product_title }}</h3>
                        <p class="product-price">TTD {{ $data->product_price }} </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- end more products -->


</x-layouts.layout-template>