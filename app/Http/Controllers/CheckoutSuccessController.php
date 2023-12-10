<?php

namespace App\Http\Controllers;

use App\Helpers\CheckoutHelper;
use App\Helpers\PointsHelper;
use App\Helpers\StripeHelper;
use App\Mail\OrderSuccessMail;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutSuccessController extends Controller
{
    public function __invoke(Request $request, $payment, $id)
    {
        // Get user
        $user = Auth::user();

        // Get products in cart
        $user_products = $user->products;
        $checkout = new CheckoutHelper($user_products);

        // Check if cart is empty
        if ($checkout->isEmpty()) {
            echo 'Cart is empty';
            exit;
        }

        // calculate total
        $checkout->calculateTotal();

        // determine payment used
        switch ($payment) {
            case 'debug':
                // code...
                $data = [
                    'subtotal' => $checkout->getSubtotal(),
                    'total' => $checkout->getTotal(),
                    'payment' => 'none',
                    'payment_id' => 'none',
                ];
                $completed = true;
                break;

            case 'stripe':
                // code...
                $payment_object = new StripeHelper();
                $checkout_order = $payment_object->getCheckoutOrder($id);
                // dd($checkout_order);
                $completed = $payment_object->isCheckoutCompleted($checkout_order);
                $data = $payment_object->getPaymentDetails($checkout_order);

                $completed = true;
                break;

            default:
                // code...
                break;
        }

        // check if payment was completed
        if (empty($completed) || empty($data)) {
            echo 'Payment process not completed';
            exit;
        }

        // merge all data
        $data['user_id'] = Auth::id();

        // Insert order
        $order = Order::create([
            'user_id' => $data['user_id'],
            'subtotal' => $data['subtotal'],
            'total' => $data['total'],
            'payment' => $data['payment'],
            'payment_id' => $data['payment_id'],
        ]);

        // Create array containing order_product models
        $order_id = $order->order_id;
        $records = [];
        $user_products->each(function ($data) use (&$records) {
            array_push(
                $records,
                new Order_product([
                    'product_id' => $data->id,
                    'order_product_price' => $data->product_price,
                    'order_product_quantity' => $data->pivot->cart_quantity,
                ])
            );
        });
        // Points file
        $points_helper = new PointsHelper();
        $user_group_id = $user->groups->id;
        $points_helper->setValues($data['total'], $user->total_points, $user_group_id);
        $order->points_gained = $points_helper->getPointsGained();
        User::updateUserPointsGained($user->id, $order->points_gained)->get();
        $points_helper->clearPointsSession();

        // insert all records for order_products
        $order->order_product()->saveMany($records);

        // Remove all user cart products
        $user->products()->detach();

        $name = $user->name;
        $messagebody = 'Please come again soon.';
        $hello = 'Hi ';

        // Mail::to($request->user()->send(new OrderShipped($order)),

        Mail::to(Auth::user())->send(new OrderSuccessMail($name, $messagebody, $hello, $user_products));

        return redirect('/thanks')->with('message', 'Payment was successful');
    }
}
