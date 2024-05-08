<?php declare(strict_types=1);

namespace Racing;

class Car
{
    private int $kilometersTraveled;
    public function __construct(private string $model, private float $fuelAmount, private float $consumption)
    {
        $this->kilometersTraveled = 0;
    }

    public function drive($distance)
    {
        $neededFuel = $distance * $this->consumption;

        if($neededFuel > $this->fuelAmount){
            echo 'Insufficient fuel for the drive';
        }
        $this->fuelAmount -= $neededFuel;
        $this->kilometersTraveled += $distance;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getFuelAmount(): float
    {
        return $this->fuelAmount;
    }

    public function setFuelAmount(float $fuelAmount): void
    {
        $this->fuelAmount = $fuelAmount;
    }



    public function getConsumption(): float
    {
        return $this->consumption;
    }

    public function getKilometersTraveled(): int
    {
        return $this->kilometersTraveled;
    }

    public function setKilometersTraveled(int $kilometersTraveled): void
    {
        $this->kilometersTraveled = $kilometersTraveled;
    }

}
