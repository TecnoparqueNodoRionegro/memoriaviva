<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;

class PayController extends Controller
{
    
    public function index(Product $product){
        $price = $product->price;
        $payU = $this->generateFirmaPayU($price);

        return view('pay', compact('payU', 'product'));
    }

    public function generateFirmaPayU($price){

        $referenceCode = Str::random(20);

        $signature = md5(config('services.payu.api_key') . '~' . config('services.payu.merchant_id') . '~' . $referenceCode . '~' . $price . '~' . config('services.payu.currency'));

        return [
            'referenceCode' => $referenceCode,
            'signature' => $signature
        ];
    }
}
