<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart_details = Auth::user()->products;

        $checkoutcontroller = new CheckoutHelper($cart_details);

        $checkoutcontroller->calculateTotal();

        return view('template0_pages/checkoutpage', [
            'cart_details' => $cart_details,
            'checkoutcontroller' => $checkoutcontroller,
        ]);
    }
}
