<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $product_details = Product::all();
        return view('template0_pages/storepage', [
            'product_details' => $product_details,
        ]);
    }
}
