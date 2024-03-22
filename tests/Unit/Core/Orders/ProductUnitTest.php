<?php

namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ProductUnitTest extends TestCase
{
    public function testAttributes()
    {
        $product = new Product(
            id: 1,
            name: 'produx',
            price: 10,
            total: 12
        );

        $this->assertEquals(1, $product->getId());
        $this->assertEquals('produx', $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(12, $product->getTotal());
    }

    public function testCalc()
    {
        $product = new Product(
            id: 1,
            name: 'produx',
            price: 10,
            total: 12
        );
        
        $this->assertEquals(120, $product->total());
        $this->assertEquals(132, $product->totalWithTax10());

        $this->assertTrue(true);
    }
}