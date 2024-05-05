<?php
namespace App\UseCase\Poster;
use App\Models\Product;

class Input{

    /**
     * All posters data
     *
     * @param array $poster_data
     */
    public function __construct(
       public array $data,
       public int $product_id
    ){}
}