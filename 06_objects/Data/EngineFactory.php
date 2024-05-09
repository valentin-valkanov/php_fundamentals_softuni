<?php declare(strict_types=1);

namespace Data;

class EngineFactory
{
    public function create(int $speed, int $power): Engine
    {
        return new Engine($speed, $power);
    }
}