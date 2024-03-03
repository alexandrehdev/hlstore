<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\UseCase\Product\Input as StoreProductInput;
use App\UseCase\Product\UseCase as StoreProduct;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreProductRequest $request, StoreProduct $store_product) :RedirectResponse
    {
        $data = $request->validated();
    
        if($request->hasFile('file')){
            $image_path = Storage::putFile('public/products', $request->file('file'));
        }
        
        $store_product_input = new StoreProductInput(
            $data["name"],
            $data["price"],
            $data["category"],
            $image_path,
            $data["description"],
            $data["user_id"]
        );

        $store_product->execute($store_product_input);
        
        return redirect()->route('home')->with("success","Produto publicado com sucesso");
    }


    public function show(Product $product) :View
    {
        $product = Product::with('user')
        ->where("id","=",$product->id)
        ->get()
        ->first();

        return view("product.show", ["product" => $product]);
    }
}
