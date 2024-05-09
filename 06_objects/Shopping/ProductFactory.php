<?php declare(strict_types=1);

namespace Shopping;

class ProductFactory
{
    public function create(string $name, int $cost): Product
    {
        return new Product($name, $cost);
    }
}