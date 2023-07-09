<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class OffersController extends Controller
{
    
    public function show()
    {
        $products = Product::all();

        return view("offers.show",["products" => $products]);
    }
}
