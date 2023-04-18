<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\File;
use App\Models\Product;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate(5);

        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $files = File::all();
        $states = State::all();
        $categoryProducts = CategoryProduct::all();

        return view('admin.products.create', compact('files', 'states', 'categoryProducts'));
    }

    public function store(Request $request){
        $rules = [
            'name' => ['required', 'max:45'],
            'description' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
            'stock' => ['required'],
            'state_id' => ['required'],
            'file_id' => ['required'],
            'category_product_id' => ['required']
        ];

        $customMessages = [
            'name.required' => 'Este campo es obligatorio',
            'name.max' => 'El nombre no puede tener más de 45 caracteres',
            'description.required' => 'Este campo es obligatorio',
            'price.required' => 'Este campo es obligatorio',
            'quantity.required' => 'Este campo es obligatorio',
            'stock.required' => 'Este campo es obligatorio',
            'state_id.required' => 'Este campo es obligatorio',
            'file_id' => 'Este campo es obligatorio',
            'category_product_id' => 'Este campo es obligatorio',
        ];

        $request->validate($rules, $customMessages);

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->stock = $request->stock;
        $product->state_id = $request->state_id;
        $product->file_id = $request->file_id;
        $product->category_product_id = $request->category_product_id;

        $product->save();

        return redirect()->route('admin.products.index');
    }
}
