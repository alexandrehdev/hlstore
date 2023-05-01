<?php

namespace App\UseCase\Product;

class Input
{

    /**
     * @param string $name
     * @param string $category
     * @param string $file
     * @param string $description
     */
    
    public function __construct(
        public string $name,
        public string $price,
        public string $category,
        public string $file,
        public string $description,
        public string $user_id
    )
    {}
}
