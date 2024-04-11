<?php

namespace App\Http\Controllers\Subtype;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subtypes\Fashion\StoreRequest;
use App\UseCase\Product\Create\UseCase as CreateProduct;
use App\UseCase\Product\Create\Input as CreateProductInput;

class FashionController extends Controller
{
    public function create()
    {
        return view("product.subtypes.fashion.create");
    }

    public function store(StoreRequest $request, CreateProduct $createProduct)
    {
        $create_product_input = (new CreateProductInput(
            $request->validated(),
        ));
        
        $createProduct->handle(
            $create_product_input,
        );
        
        return redirect()
            ->route("stock")
            ->with("success","Produto Criado");
        
    }
}
