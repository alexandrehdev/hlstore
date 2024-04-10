<?php

namespace App\UseCase\Product\Publish;
use App\Models\Product;
use App\Enums\ProductStatus;

class UseCase{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function handle(Input $input)
    {
        $product = Product::find($input->product->id);

        $product->status = $input->product->status == ProductStatus::PUBLIC ? ProductStatus::PRIVATE : ProductStatus::PUBLIC;

        $product->save();
    }
}