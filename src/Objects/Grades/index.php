<?php

namespace App\Objects\Grades;

require_once __DIR__ . '/../../../vendor/autoload.php';

$rep = new StudentRepository();

$students = $rep->createStudentsFromInput();
$filteredStudents = $rep->sortStudentsByGrades($students);
$rep->printStudents($filteredStudents);