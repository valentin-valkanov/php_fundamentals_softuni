<?php declare(strict_types=1);

namespace App\Objects\Order;

class Person
{
    public function __construct(private string $name, private string $id, private int $age)
    {
    }
}