<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all(); 
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {  
        return view('products.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        request()->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
            'price' => ['required', 'numeric','min:0'],
            'quantity' => ['required','numeric'],
        ]);

        $product = Product::create([
            'name' => request('name'),
            'description'=> request('description'),
            'price'=> request('price'),
            'quantity'=> request('quantity'),
        ]);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }

}
