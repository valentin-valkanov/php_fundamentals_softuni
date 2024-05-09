<?php
declare(strict_types=1);

namespace Data;

class DataHandler
{
    private array $cars = [];
    public function createCarsFromInput(
        EngineFactory $engineFactory,
        CargoFactory $cargoFactory,
        CarFactory $carFactory)
    {
        $n = readline();
        for($i = 0; $i < $n; $i++){
            $data = explode(" ",  readline());
            [$model, $engineSpeed, $enginePower, $cargoWeight, $cargoType] = $data;
            $engine = $engineFactory->create((int)$engineSpeed, (int)$enginePower);
            $cargo = $cargoFactory->create((int)$cargoWeight, $cargoType);
            $car = $carFactory->create($model, $engine, $cargo);
            $this->cars[] = $car;
        }
    }

    public function chooseCar()
    {
        $input = readline();
        if(!$input === 'fragile' && 'flamable'){
            echo 'Wrong input';
            return;
        }
        if ($input === 'fragile'){
            foreach ($this->cars as $car){
                if($car->getCargo()->getType() === 'fragile' && $car->getCargo()->getWeight() < 1000){
                    echo $car->getModel() . PHP_EOL;
                }
            }
        }
        elseif ($input === 'flamable'){
            foreach($this->cars as $car){
                if($car->getCargo()->getType() === 'flamable' && $car->getEngine()->getPower() > 250){
                    echo $car->getModel() . PHP_EOL;
                }
            }
        }
    }
}