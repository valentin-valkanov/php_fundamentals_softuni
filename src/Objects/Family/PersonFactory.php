<?php declare(strict_types=1);

namespace App\Objects\Family;


class PersonFactory
{
    public function create(string $name, int $age): Person
    {
        return new Person($name, $age);
    }
}