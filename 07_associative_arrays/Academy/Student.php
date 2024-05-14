<?php declare(strict_types=1);

namespace Academy;
class Student
{
    private array $grades = [];
    public function __construct(private string $name)
    {
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function getName(): string
    {
        return $this->name;
    }


}