<?php

namespace App\Http\Controllers;

use App\Mail\OrderSuccessMail;

class MailController extends Controller
{
    public function index()
    {
        $name = 'Anil';

        return (new OrderSuccessMail($name))->render();
    }
}
