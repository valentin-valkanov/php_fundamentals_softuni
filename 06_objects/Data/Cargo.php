<?php
declare(strict_types=1);

namespace Data;

class Cargo
{
    public function __construct(private int $weight, private string $type)
    {
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getType(): string
    {
        return $this->type;
    }


}