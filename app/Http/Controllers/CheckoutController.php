<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\PointsHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart_details = Auth::user()->products;

        $checkoutcontroller = new CheckoutHelper($cart_details);

        $checkoutcontroller->calculateTotal();

        $points_helper = new PointsHelper();
        $points_helper->setValues($cart_data->getSubtotal(), $user->total_points, $user_group_id);

        return view('template_pages/checkoutpage', [
            'cart_details' => $cart_details,
            'checkout' => $checkoutcontroller,
        ]);
    }

    public function points(Request $request)
    {
        $message = PointsHelper::exchangePoints($request->points_exchanged);

        return redirect()->route('checkout.index')->with('message', $message);
    }
}
