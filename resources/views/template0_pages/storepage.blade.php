<x-layouts.layout-template0>


    <section class="ftco-section bg-light">
        <div class="container">


            <x-core.search-custom />

            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">

                    @if(empty($product_details) || $product_details->isEmpty())

                    {{-- no results found --}}
                    <x-core.store-empty />

                    @else

                    {{-- show products --}}

                    <div class="row">


                        @foreach ($product_details as $data)
                        <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
                            <div class="product">
                                <a href="#" class="img-prod"><img class="img-fluid"
                                        src="{{ asset('storage/' . $data->product_image1) }}" alt="Colorlib Template">
                                    <span class="status">30%</span>
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="{{ route('store.details', ['id'=> $data->id]) }}">{{
                                            $data->product_title }}
                                        </a>
                                    </h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span class="mr-2 price-dc">$120.00</span>
                                                <span class="price-sale">${{ $data->product_price }}</span>
                                            </p>
                                        </div>
                                        <div class="rating">
                                            <p class="text-right">
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="bottom-area d-flex px-3">
                                        <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
                                                    class="ion-ios-add ml-1"></i></span></a>
                                        <a href="#" class="buy-now text-center py-2">Buy now<span><i
                                                    class="ion-ios-cart ml-1"></i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @endif

            <div class="col-md-4 col-lg-2 sidebar">
                <div class="sidebar-box-2">
                    <h2 class="heading mb-4"><a href="#">Clothing</a></h2>
                    <ul>

                        <li><a href="/store">All</a></li>

                        @foreach ($category_details as $data)
                        <li><a href="{{ route('store', ['category' => $data->product_category]) }}">{{
                                $data->product_category }}</a></li>
                        @endforeach

                    </ul>
                </div>


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
                    <h2 class="heading mb-4"><a href="#">Sort CODES</a></h2>
                    <ul>
                        <li><a href="/store">All</a></li>
                        <li><a href="{{ route('store', ['sort' => 'title']) }}">Title (A-z)</a></li>
                        <li><a href="{{ route('store', ['sort' => 'title-des']) }}">Title (Z-a)</a></li>
                        <li><a href="{{ route('store', ['sort' => 'price']) }}">Price (Lowest to Highest)</a></li>
                        <li><a href="{{ route('store', ['sort' => 'price-desc']) }}">Price (Highest to Lowest)</a></li>

                    </ul>
                </div>

                <div class="sidebar-box-2">
                    <h2 class="heading mb-4"><a href="#">Filter</a></h2>
                    <ul>
                        <li><a href="/store">All</a></li>
                        <li><a href="store?max_price=500">Price less than $500</a></li>
                        <li><a href="store?max_price=1000">Price less than $1000</a></li>
                        <li><a href="store?min_price=500">Price greater than $500</a></li>
                        <li><a href="store?min_price=100">Price greater than $1000</a></li>

                    </ul>
                </div>


                <div class="sidebar-box-2">
                    <h2 class="heading mb-4"><a href="#">Filter CODES</a></h2>
                    <ul>
                        <li><a href="/store">All</a></li>
                        <li><a href="{{ route('store', ['max_price' => '500']) }}">Price less than $500</a></li>
                        <li><a href="{{ route('store', ['max_price' => '1000']) }}">Price less than $1000</a></li>
                        <li><a href="{{ route('store', ['min_price' => '500']) }}">Price greater than $500</a></li>
                        <li><a href="{{ route('store', ['min_price' => '1000']) }}">Price greater than $1000</a></li>

                    </ul>
                </div>


                <div class="sidebar-box-2">
                    <h2 class="heading mb-2"><a href="#">Bags</a></h2>
                    <h2 class="heading mb-2"><a href="#">Accessories</a></h2>
                </div>
                <div class="sidebar-box-2">
                    <h2 class="heading mb-4"><a href="#">Shoes</a></h2>
                    <ul>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Addidas</a></li>
                        <li><a href="#">Skechers</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Coats</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>


</x-layouts.layout-template0>