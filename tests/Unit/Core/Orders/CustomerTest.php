<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $custumer = new Customer(
            name: "Tom"
        );

        $this->assertEquals("Tom", $custumer->getName());

        $custumer->changeName(
            name: "Novo Nome"
        );

        $this->assertEquals("Novo Nome", $custumer->getName());

        $custumer->getName();

        $this->assertTrue(true);
    }
}