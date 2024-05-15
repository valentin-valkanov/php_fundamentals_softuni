<?php

declare(strict_types=1);

use App\Associative\Academy\StudentFactory;
use App\Associative\Academy\StudentsDispatcher;

require_once __DIR__ . '/../../../vendor/autoload.php';

$studentFactory = new StudentFactory();
$dispatcher = new StudentsDispatcher($studentFactory);
$dispatcher->readData();
$dispatcher->getFilteredStudentsByGrade();
$dispatcher->printStudents();