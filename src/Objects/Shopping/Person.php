<?php
declare(strict_types=1);

namespace App\Objects\Shopping;

class Person
{
    private array $products = [];
    public function __construct(private string $name, private int $money)
    {
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProducts(string $product): void
    {
        $this->products[] = $product;
    }



    public function getName(): string
    {
        return $this->name;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function setMoney(int $money): void
    {
        $this->money = $money;
    }



}