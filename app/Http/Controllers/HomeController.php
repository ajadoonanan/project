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

        return view('template0_pages/homepage', [
            'random' => $random,
            'recent' => $recent,
        ]);
    }

    public function randomProducts()
    {
        return DB::table('products')->inRandomOrder()->limit(4)->get();
    }

    public function recentProducts()
    {
        return DB::table('products')->orderBy('created_at', 'desc')->limit(4)->get();
    }

    public function bestSellingProducts()
    {
        return true;
    }
}
