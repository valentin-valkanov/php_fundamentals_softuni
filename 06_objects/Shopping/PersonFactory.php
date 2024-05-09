<?php declare(strict_types=1);

namespace Shopping;

class PersonFactory
{
    public function create(string $name, int $money): Person
    {
        return new Person($name, $money);
    }
}