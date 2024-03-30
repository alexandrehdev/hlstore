<?php

namespace App\UseCase\ProductType;
use App\UseCase\ProductType\Input;
use App\Enums\ProductSubtype;
class UseCase
{

    public function validateProduct(Input $input)
    {
        $subtype = $input->subtype;

        return match($subtype){
            ProductSubtype::MODA => route('product.subtype.fashion',['subtype' => $subtype]),
        };
    }
    
    public function validateVehicle(Input $input)
    {
        dd("Ainda esta sendo feito");
    }

    public function validateDigital(Input $input)
    {
        dd("Ainda esta sendo feito");
    }
}   
