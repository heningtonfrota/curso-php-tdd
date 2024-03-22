<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $id,
        protected string $name,
        protected float $price,
        protected int $total
    ) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getTotal(): string
    {
        return $this->total;
    }

    public function total(): float
    {
        return $this->price * $this->total;
    }

    public function totalWithTax10(): float
    {
        $total = $this->price * $this->total;
        return ($total * 0.1) + $total;
    }
}