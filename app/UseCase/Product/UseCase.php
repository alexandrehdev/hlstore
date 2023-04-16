<?php

namespace App\UseCase\Product;
use App\Models\Product;
use App\UseCase\Product\Input;

class UseCase
{

    public function execute(Input $input)
    {
        $product = new Product();
        $product->name = $input->name;
        $product->category = $input->category;
        $product->file = $input->file;
        $product->description = $input->description;
        $product->user_id = $input->user_id;

        $product->save();
    }
}   
