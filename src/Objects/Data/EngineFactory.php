<?php declare(strict_types=1);

namespace App\Objects\Data;

class EngineFactory
{
    public function create(int $speed, int $power): Engine
    {
        return new Engine($speed, $power);
    }
}