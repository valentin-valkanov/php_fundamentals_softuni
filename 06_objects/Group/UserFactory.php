<?php declare(strict_types=1);

namespace Group;

class UserFactory
{
    public function create(string $name)
    {
        return new User($name);
    }
}