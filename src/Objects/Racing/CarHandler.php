<?php declare(strict_types=1);

namespace App\Objects\Racing;
class CarHandler
{
    private array $cars = [];
    private string $result = '';
    public function readCarsFromInput(CarFactory $carFactory)
    {
        $n = readline();
        for($i = 0; $i < $n; $i++){
            $input = explode(' ', readline());
            [$model, $fuel, $consumption] = $input;
            $car = $carFactory->create($model, (float)$fuel, (float)$consumption);
            $this->addCar($car);
        }
    }

    public function readCommands()
    {
        $data = readline();
        while($data !== 'End'){
            [$command, $carModel, $distanceTraveled] = explode(" ", $data);

            foreach($this->cars as $car){
                if($carModel === $car->getModel()){
                    $this->drive($car, $distanceTraveled);
                }
            }
            $data = readline();
        }
    }
    public function drive($car, $distance)
    {
        $neededFuel = $distance * $car->getConsumption();

        if ($neededFuel > $car->getFuelAmount()){
            $this->result .= 'Insufficient fuel for the drive' . PHP_EOL;
        } else {
            $car->setFuelAmount($car->getFuelAmount() - $neededFuel);
            $car->setKilometersTraveled($car->getKilometersTraveled() + $distance);
        }

    }

    public function addCar($car)
    {
        $this->cars[] = $car;
    }

    public function printCars()
    {
        echo $this->result . PHP_EOL;
        foreach($this->cars as $car){
            echo $car->getModel() . " " . number_format($car->getFuelAmount(), 2) . " " . $car->getKilometersTraveled(). PHP_EOL;
        }
    }
}