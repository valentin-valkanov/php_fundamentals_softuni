<?php declare(strict_types=1);

namespace App\Associative\Course;

class CourseFactory
{
    public function create(string $name)
    {
        return new Course($name);
    }
}