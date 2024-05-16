<?php
declare(strict_types=1);
namespace App\Associative\Course;
require_once __DIR__ . '/../../../vendor/autoload.php';

$courseRegistryFactory = new CourseRegistryFactory;
$courseFactory = new CourseFactory;
$handler = new CourseHandler($courseRegistryFactory, $courseFactory);
$handler->addCoursesFromInput();
$handler->printCourses();