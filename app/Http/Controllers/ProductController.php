<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {   
        $products = [
            [
                'name' => 'Baju',
                'price' => 49000,
                'created_at' => '02/11/21'
            ],
            [
                'name' => 'Celana',
                'price' => 59000,
                'created_at' => '02/11/21'
            ]
        ];
        return view('products.index', compact('products'));
    }
}
