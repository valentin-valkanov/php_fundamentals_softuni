<?php declare(strict_types=1);

namespace Company;

class SalaryAnalyser
{
    private array $departments = [];
    public function dispatchEmployees(EmployeeFactory $employeeFactory, DepartmentFactory $departmentFactory)
    {
        $n = readline();
        for($i = 0; $i < $n; $i++){

            $data = readline();
            [$employeeName, $salary, $departmentName] = explode(" ", $data);
            $employee = $employeeFactory->create($employeeName, (float)$salary);

            if (!array_key_exists($departmentName, $this->departments)) {

                $department = $departmentFactory->create($departmentName);
                $this->departments[$departmentName] = $department;
            }
            $this->departments[$departmentName]->addEmployee($employee);
        }
    }

    public function getAverageSalaryByDepartment()
    {
        $highestAverageSalary = 0;
        $mostPaidDepartment = '';

        foreach($this->departments as $departmentName => $department){
            $totalSalaries = 0;

            foreach($department->getEmployees() as $employee){
                $totalSalaries += $employee->getSalary();
                $averageSalary = $totalSalaries / count($department->getEmployees());

                if($averageSalary > $highestAverageSalary){
                    $highestAverageSalary = $averageSalary;
                    $mostPaidDepartment = $departmentName;
                }
            }
        }

        echo "Highest Average Salary: $mostPaidDepartment" .PHP_EOL;

        foreach($this->departments as $departmentName => $department){
            if($mostPaidDepartment === $departmentName){
                $employees = $department->getEmployees();
                usort($employees, fn($a, $b) => $b->getSalary() - $a->getSalary());
                foreach($employees as $employee){
                    $salary = number_format($employee->getSalary(), 2);
                    echo "{$employee->getName()}  {$salary}" . PHP_EOL;
                }
            }
        }
    }
}