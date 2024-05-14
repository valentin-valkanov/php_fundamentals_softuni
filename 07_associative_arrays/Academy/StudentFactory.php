<?php
declare(strict_types=1);

namespace Academy;

class StudentFactory
{
    public function create(string $name)
    {
        return new Student($name);
    }
}