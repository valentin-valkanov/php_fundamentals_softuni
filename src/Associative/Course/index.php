<?php
declare(strict_types=1);
namespace App\Associative\Course;
require_once __DIR__ . '/../../../vendor/autoload.php';

$regisrty = new CourseRegistry();
$handler = new CourseHandler($regisrty);
$handler->addCoursesFromInput();
$handler->printCourses();