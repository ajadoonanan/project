<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{
    public function index($id)
    {
        $product_details = Product::find($id);
        $recommendedProducts = $this->recommendedProducts($id);

        // dd($recommendedProducts);

        return view('template_pages/detailspage', [
            'data' => $product_details,
            'recommendedProducts' => $recommendedProducts,
        ]);
    }

    public function recommendedProducts($product_id)
    {
        return DB::select(
            "
            SELECT *
            FROM products
            WHERE id != $product_id
            AND id IN (
                SELECT DISTINCT product_id FROM order_product WHERE order_id in (
                    SELECT DISTINCT order_id FROM order_product WHERE product_id = $product_id
                    )
                )
            "
        );
    }
}
