<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\PointsHelper;
use App\Models\points\PointsDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_group_id = $user->groups->id;

        $cart_details = Auth::user()->products;

        $checkoutcontroller = new CheckoutHelper($cart_details);

        $checkoutcontroller->calculateTotal();

        $points_helper = new PointsHelper();
        $points_helper->setValues($checkoutcontroller->getSubtotal(), $user->total_points, $user_group_id);
        $discount_data = PointsDiscount::all();
        // dd($discount_data);

        return view('template_pages/checkoutpage', [
            'cart_details' => $cart_details,
            'checkout' => $checkoutcontroller,
            'points_helper' => $points_helper,
            'discount_data' => $discount_data,
            'cart_data' => $checkoutcontroller,
        ]);
    }

    public function points(Request $request)
    {
        $message = PointsHelper::exchangePoints($request->points_exchanged);

        return redirect()->route('checkout')->with('message', $message);
    }
}
