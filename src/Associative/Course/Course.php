<?php declare(strict_types=1);

namespace App\Associative\Course;

class Course
{
    private array $students = [];

    public function __construct(private string $name)
    {
    }

    public function addStudent(string $student)
    {
        $this->students[] = $student;
    }
    public function getOrderedStudents()
    {
         sort($this->students);
         return $this->students;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStudents(): array
    {
        return $this->students;
    }



}