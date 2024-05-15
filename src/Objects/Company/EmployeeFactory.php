<?php declare(strict_types=1);

namespace App\Objects\Company;

class EmployeeFactory
{
    public function create(string $name, float $salary)
    {
        return new Employee($name, $salary);
    }
}