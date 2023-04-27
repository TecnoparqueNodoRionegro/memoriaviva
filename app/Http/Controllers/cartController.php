<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Contracts\Service\Attribute\Required;
use Cart;
use Darryldecode\Cart\Cart as CartCart;

class cartController extends Controller
{
    public function add(Request $request){
       
        $product = Product::find($request->product_id);

        Cart::add(
            $product->id,
            $product->name,
            $product->price,
            1,
            array("url"=>$product->files->route)
        );

        return back()->with('success',"Se agrego el producto al carrito");
    }
    public function cart(){
        $params =[
            'title'=>'Shopping Cart Checkout',
        ];
        return View('products.checkout')->with($params);
    }
}
