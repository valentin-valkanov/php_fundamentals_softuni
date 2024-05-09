<?php
declare(strict_types=1);

namespace Data;

class Engine
{
    public function __construct(private int $speed, private int $power)
    {
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getPower(): int
    {
        return $this->power;
    }

}