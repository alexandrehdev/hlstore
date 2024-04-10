<?php

namespace App\UseCase\Product\Publish;
use App\Models\Product;

class Input{

    /**
     * Undocumented function
     *
     * @param Product $product
     */
    public function __construct(
        public Product $product
    ){}
}