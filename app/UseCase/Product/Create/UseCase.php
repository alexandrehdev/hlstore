<?php

namespace App\UseCase\Product\Create;
use App\Models\Product;
use App\Enums\ProductStatus;


class UseCase
{
    
    /**
     * Undocumented function
     *
     * @param Input $input
     * @return void
     */
    public function handle(Input $input)
    {
        $product = new Product();

        foreach($input->data as $field => $value){
            $product->{$field} = $value;
        }

        $product->visibility = ProductStatus::PRIVATE;
        $product->user_id = loggedUser()->id;

        $product->save();
    }
}