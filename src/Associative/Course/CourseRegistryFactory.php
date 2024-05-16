<?php declare(strict_types=1);

namespace App\Associative\Course;

class CourseRegistryFactory
{
    public function create()
    {
        return new CourseRegistry();
    }
}