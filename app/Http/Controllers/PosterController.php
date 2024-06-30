<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCase\Poster\UseCase as StorePoster;
use App\UseCase\Poster\Input as PosterInput;
use App\Http\Requests\Posters\StoreRequest;

class PosterController extends Controller
{

    public function show(int $product_id)
    {
        return view("posters.show",["product_id" => $product_id]);
    }

    public function create()
    {
        return view("posters.create");
    }

    public function store(StoreRequest $request, StorePoster $storePoster)
    {
        $posters = $request->file("posters");
        $product_id = $request->validated()["product_id"];


        $poster_input = new PosterInput(
         $posters,
         $product_id
        );

        $storePoster->handle($poster_input);

        return redirect()->route("stock");
    }

}
