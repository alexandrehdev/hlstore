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
use App\UseCase\ProductType\Input as ProductTypeInput;
use App\UseCase\ProductType\UseCase as FilterType;
use App\Enums\ProductSubtype;

class ProductTypeController extends Controller
{

    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function details(Request $request, FilterType $filterType)
    {
        $type = $request->input('type');
        $subtype = ProductSubtype::from($request->input('subtype'));
        
        $input = new ProductTypeInput(
            $type,
            $subtype
        );

        $response = match($type){
            'produto' => (new FilterType())->validateProduct($input),
            'veiculo' => (new FilterType())->validateVehicle($input),
            'digital' => (new FilterType())->validateDigital($input),

             default => back()->with('message',"Tipo inexistente, por favor tente novamente.")
        };
        

       return redirect()->to($response);
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
