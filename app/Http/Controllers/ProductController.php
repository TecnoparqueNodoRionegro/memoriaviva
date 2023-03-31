<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request){
        $search = trim($request->get('search'));
        $products = Product::where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('description', 'LIKE', '%' . $search . '%')
                        ->orderBy('id', 'DESC')
                        ->paginate();

        return view('products.index', compact('products', 'search'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => ['required', 'max:45'],
            'description' => ['required'],
            'cover_page_url' => ['required', 'image', 'max:2048'],
            'price' => ['required']
        ];

        $customMessages = [
            'name.required' => 'Este campo es obligatorio',
            'name.max' => 'El nombre no puede tener más de 45 caracteres',
            'description.required' => 'Este campo es obligatorio',
            'cover_page_url.required' => 'Debes seleccionar un archivo',
            'cover_page_url.image' => 'El archivo debe ser una imagen',
            'cover_page_url.max' => 'La imagen no puede pesar más de 2 MB',
            'price.required' => 'Este campo es obligatorio',
        ];

        $request->validate($rules, $customMessages);

        $img = $request->file('cover_page_url')->store('public/img');
        $url = Storage::url($img);

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cover_page_url = $url;

        $product->save();

        return $product;
    }
}
