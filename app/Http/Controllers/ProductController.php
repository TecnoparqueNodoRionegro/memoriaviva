<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $search = trim($request->get('search'));
        $products = Product::where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('description', 'LIKE', '%' . $search . '%')
                        ->orderBy('id', 'DESC')
                        ->paginate(12);

        return view('products.index', compact('products', 'search'));
    }

    public function show(Product $product){

        return view('products.show', compact('product'));
    }
}
