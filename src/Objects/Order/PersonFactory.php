<?php declare(strict_types=1);

namespace App\Objects\Order;


class PersonFactory
{
    public function create(string $name, string $id, int $age)
    {
        return new Person($name, $id, $age);
    }
}