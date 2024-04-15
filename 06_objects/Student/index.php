<?php

use Student\StudentRepository;

require_once 'Student.php';
require_once 'StudentRepository.php';

$rep = new StudentRepository();

$students = $rep->createStudentsFromInput();
$filteredStudents = $rep->sortStudentsByGrades($students);
$rep->printStudents($filteredStudents);