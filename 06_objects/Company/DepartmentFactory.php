<?php declare(strict_types=1);

namespace Company;
class DepartmentFactory
{
    public function create(string $name)
    {
        return new Department($name);
    }
}