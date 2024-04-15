<?php
declare(strict_types=1);

namespace Student;
class Student
{
    private string $name;
    private array $grades;
    private float $averageGrade;


    public function __construct(string $name, array $grades)
    {
        $this->name = $name;
        $this->grades = $grades;
        $this->averageGrade = $this->calculateAverageGrade($grades);

    }

    private function calculateAverageGrade(array $grades): float
    {
        $averageGrade = array_sum($grades) / count($grades);
        return $averageGrade;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function getAverageGrade(): float
    {
        return $this->averageGrade;
    }
}
