<?php

declare(strict_types=1);

use Academy\StudentFactory;
use Academy\StudentsDispatcher;

require_once __DIR__ . '/../../vendor/autoload.php';

$studentFactory = new StudentFactory();
$dispatcher = new StudentsDispatcher($studentFactory);
$dispatcher->readData();
$dispatcher->getFilteredStudentsByGrade();
$dispatcher->printStudents();