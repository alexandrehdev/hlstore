<?php

namespace Tests\Unit\UseCases;

use Tests\TestCase;
use App\UseCase\Product\Input as ProductInput;
use App\UseCase\Product\UseCase as CreateProduct;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_can_create_product()
    {
       $product = (new CreateProduct())->execute(
        new ProductInput(
            "Um produto bem dahora",
            "3.40",
            "Roupa",
            "produto_image",
            "uma descrição bem dahora",
            "1"
        )
       );

       $this->assertInstanceOf(Product::class,$product);
    }
}
