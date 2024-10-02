<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all(); //This takes all the Data from Product table (model) and set it as the $product variable
        return view ('products.index', ['products' => $products]);  // this sends the prodcuts as products to prodcuts.index which is a name from the routes
    }

    public function create(){
        return view ('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'


        ]);
        $newProduct = Product::create($data);

        return redirect(route('products.index'));
    }

    public function edit(Product $product){
        return view ('products.edit', ['product' => $product]);
    }
}