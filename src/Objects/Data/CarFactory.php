<?php
declare(strict_types=1);

namespace App\Objects\Data;

class CarFactory
{
    public function create(string $model, Engine $engine, Cargo $cargo): Car
    {
        return new Car($model, $engine, $cargo);
    }
}