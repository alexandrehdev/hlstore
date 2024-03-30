<?php

namespace App\UseCase\ProductType;
use App\Enums\ProductSubtype;

class Input
{

    /**
     * @param string $type
     * @param string $subtype
     */
    public function __construct(
        public string $type,
        public ProductSubtype $subtype,
    ){}
}
