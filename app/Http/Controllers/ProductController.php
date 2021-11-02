<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create([
            'name'  => $request -> name,
            'price' => $request -> price
        ]);
        return back();
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        if($product) $product->delete();
        return back();
    }
}
