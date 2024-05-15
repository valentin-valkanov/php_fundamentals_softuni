<?php declare(strict_types=1);

namespace App\Objects\Company;


class Department
{
    private array $employees = [];
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addEmployee($employee)
    {
        $this->employees[] = $employee;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }


}