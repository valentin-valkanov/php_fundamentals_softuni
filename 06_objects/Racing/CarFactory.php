<?php declare(strict_types=1);

namespace Racing;
require_once 'Car.php';
class CarFactory
{
    public function create(string $model, float $fuelAmount, float $consumption): Car
    {
        return new Car($model, $fuelAmount, $consumption);
    }
}