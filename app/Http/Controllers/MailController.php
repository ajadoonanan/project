<?php

namespace App\Http\Controllers;

use App\Mail\OrderSuccessMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $name = 'Anil';
        $messagebody = 'Messagebody Worked, Congratulations!!!';
        $hello = 'Hello';
        $user_products = Auth::user()->products;

        // Mail::to($request->user()->send(new OrderShipped($order)),

        Mail::to(Auth::user())->send(new OrderSuccessMail($name, $messagebody, $hello, $user_products));

        return (new OrderSuccessMail($name, $messagebody, $hello, $user_products))->render();
    }
}
