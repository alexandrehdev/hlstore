<?php
namespace App\UseCase\Poster;
use App\Models\Product;

class Input{

    /**
     * Undocumented function
     *
     * @param string $path
     */
    public function __construct(
        public string $path,
        public int $product_id
    ){}
}