<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product_details = Product::all();

        $product_details = $this->filterProducts($request);

        $category_details = Product::select('product_category')->distinct()->get();

        return view('template_pages/storepage', [
            'product_details' => $product_details,
            'category_details' => $category_details,
        ]);
    }

public function filterProducts(Request $request)
{
    $params = $request->query();
    $product_details = Product::where('id', '>', 0);

    foreach ($params as $key => $value) {
        if (empty($value)) {
            continue;
        }

        switch ($key) {
            case 'category':
                $product_details->where('product_category', $value);
                break;
            case 'search':
                $product_details->where('product_title', 'LIKE', '%'.$value.'%');
                break;
            case 'min_price':
                $product_details->where('product_price', '>=', $value);
                break;
            case 'max_price':
                $product_details->where('product_price', '<=', $value);
                break;
            case 'sort':
                // localhost:8080/store?sort=title
                $keyValues = $this->orderBy($value);
                $product_details->orderBy($keyValues[0], $keyValues[1]);
                break;

            default:
                // code...
                break;
        }
        // code...
    }

    return $product_details->get();
}

public function orderBy($value)
{
    switch ($value) {
        case 'title':
            return ['product_title', 'ASC'];
            break;
        case 'title-desc':
            return ['product_title', 'DESC'];
            break;
        case 'price':
            return ['product_price', 'ASC'];
            break;
        case 'price-desc':
            return ['product_price', 'DESC'];
            break;
        case 'value':
            // other sort features go here
            break;
        default:
            return ['product_title', 'ASC'];
            break;
    }
}
}
