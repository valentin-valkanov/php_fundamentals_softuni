<?php declare(strict_types=1);

namespace App\Objects\Shopping;

class Product
{
    public function __construct(private string $name, private int $cost)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCost(): int
    {
        return $this->cost;
    }


}