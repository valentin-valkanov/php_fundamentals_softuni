<?php declare(strict_types=1);

class Person
{
    public function __construct(
        private string $name,
        private string $id,
        private int $age
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}