<?php declare(strict_types=1);

namespace Academy;
class Student
{
    private array $grades = [];

    public function __construct(private string $name)
    {
    }

    public function getAverageGrade(): float
    {
        $averageGrade = array_sum($this->grades) / count($this->grades);
        return $averageGrade;
    }

    public function addGrade($grade)
    {
        $this->grades[] = $grade;
    }

    public function getName(): string
    {
        return $this->name;
    }


}