<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        $categoryProducts = CategoryProduct::all();
        $query = Product::query()->orderBy('id', 'DESC');

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%');
        }

        $products = $query->simplePaginate(8);

        $products->appends(['search' => $search]);

        return view('products.index', compact('products', 'categoryProducts', 'search'));
    }

    public function show(Product $product){

        return view('products.show', compact('product'));
    }
}
