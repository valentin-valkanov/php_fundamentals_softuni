<?php declare(strict_types=1);

namespace App\Objects\Racing;

class CarFactory
{
    public function create(string $model, float $fuelAmount, float $consumption): Car
    {
        return new Car($model, $fuelAmount, $consumption);
    }
}