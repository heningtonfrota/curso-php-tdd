<?php

namespace Tests;

use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        Mockery::mock(stdClass::class)->shouldReceive('teste')->andReturn(true);
        $this->assertTrue(true);
    }
}