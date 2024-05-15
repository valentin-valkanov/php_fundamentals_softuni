<?php declare(strict_types=1);

namespace App\Objects\Company;

class Employee
{
    private string $name;
    private float $salary;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }


}