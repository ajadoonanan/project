<x-layouts.layout-template>




    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>TNTCELLULAR</p>
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->


    @if($cart_details->isEmpty())
    <x-core.cart-empty />
    @else

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($cart_details as $data)


                                <tr class="table-body-row">
                                    <td class="product-remove">
                                        {{-- <a href="#"><i class="far fa-window-close"></i></a> --}}


                                        <form action="{{ route('cart.destroy', ['id' => $data->pivot->id]) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf



                                            <button class="btn p-2" type="submit">
                                                <i class="far fa-window-close"></i></button>

                                            <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                            <input type="hidden" name="product" value="{{ $data->id }}">

                                        </form>


                                    </td>
                                    <td class="product-image"><img src="{{ asset('storage/' . $data->product_image1) }}"
                                            alt="">
                                    </td>
                                    <td class="product-name">{{ $data->product_title }}</td>
                                    <td class="product-price">TTD {{$checkout->formatPrice($data->product_price) }}</td>
                                    <td class="product-quantity"><input type="number" placeholder="1"
                                            value="{{ $data->pivot->cart_quantity }}"></td>
                                    <td class="product-total">TTD {{ $checkout->formatPrice($data->cartQuantityPrice())
                                        }}
                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Subtotal: </strong></td>
                                    <td>TTD {{ $checkout->formatPrice($checkout->getSubtotal()) }}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Shipping: </strong></td>
                                    <td>TTD 0.00</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td>TTD {{ $checkout->formatPrice($checkout->getTotal()) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="{{ route('store') }}" class="boxed-btn">Continue to Shop</a>
                            <a href="{{ route('checkout') }}" class="boxed-btn black">Check Out</a>
                        </div>
                    </div>

                    {{-- <div class="coupon-section">
                        <h3>Apply Coupon</h3>
                        <div class="coupon-form-wrap">
                            <form action="index.html">
                                <p><input type="text" placeholder="Coupon"></p>
                                <p><input type="submit" value="Apply"></p>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

    @endif

</x-layouts.layout-template>