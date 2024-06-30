<?php

namespace App\Http\Controllers;

use App\Models\Product;



class StockController extends Controller
{
    public function index()
    {
        $products = Product::with(['posters'])->get();

        return view("stock.index",['products' => $products]);
    }
}
