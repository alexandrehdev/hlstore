<?php

namespace App\Http\Controllers\Subtype;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subtypes\Fashion\StoreRequest;

class FashionController extends Controller
{
    public function create()
    {
        return view("product.subtypes.fashion.create");
    }

    public function store(StoreRequest $request)
    {
        dd($request->all());
    }
}
