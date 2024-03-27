<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function store(Request $request, StoreProduct $store_product) :RedirectResponse
    {
        dd($request->input('subtype'));

        // if($request->hasFile('file')){
        //     $image_path = Storage::putFile('public/products', $request->file('file'));
        // }

        // $store_product_input = new StoreProductInput(
        //     $data["name"],
        //     $data["price"],
        //     $data["category"],
        //     $image_path,
        //     $data["description"],
        //     $data["user_id"]
        // );

        // $store_product->execute($store_product_input);

        // return redirect()->route('home')->with("success","Produto publicado com sucesso");
    }


    public function show(Product $product) :View
    {
        $product = Product::with('user')
        ->where("id","=",$product->id)
        ->first();

        return view("product.show", ["product" => $product]);
    }
}
