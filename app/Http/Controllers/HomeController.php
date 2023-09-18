<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $random = $this->randomProducts();
        $recent = $this->recentProducts();
        $best_selling_products = $this->bestSellingProducts();

        // dd($best_selling_products);

        return view('template_pages/homepage', [
            'random' => $random,
            'recent' => $recent,
            'best_selling_products' => $best_selling_products,
        ]);
    }

    public function randomProducts()
    {
        return DB::table('products')->inRandomOrder()->limit(3)->get();
    }

    public function recentProducts()
    {
        return DB::table('products')->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public function bestSellingProducts()
    {
        return DB::table('order_product')->limit(3)
         ->select(DB::raw('*, SUM(order_product_quantity) as quantity_sold'))
         ->join('products', 'order_product.product_id', '=', 'products.id')
         ->groupBy('product_id')
         ->orderByRaw('quantity_sold DESC')
         ->get();
    }
}
