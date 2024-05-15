<?php
declare(strict_types=1);
namespace App\Objects\Company;


require_once __DIR__ . '/../../../vendor/autoload.php';

$employeeFactory = new EmployeeFactory();
$departmentFactory = new DepartmentFactory();
$analyser = new SalaryAnalyser();
$analyser->dispatchEmployees($employeeFactory, $departmentFactory);
$analyser->getAverageSalaryByDepartment();
