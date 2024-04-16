<?php declare(strict_types=1);

namespace Person;
require_once 'Person.php';
use Person;

class PersonFactory
{
    public function create(string $name, string $id, int $age)
    {
        return new Person($name, $id, $age);
    }
}