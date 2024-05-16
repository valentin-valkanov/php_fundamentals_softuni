<?php declare(strict_types=1);

namespace App\Associative\Course;

class CourseRegistry
{
    private array $courses = [];

    public function addCourse($course)
    {
        $this->courses[] = $course;
    }

    public function getCourses()
    {
        return $this->courses;
    }
}