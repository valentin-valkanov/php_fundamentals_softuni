<?php

namespace App\Objects\Data;


require_once __DIR__ . '/../../../vendor/autoload.php';

$engineFactory = new EngineFactory();
$cargoFactory = new CargoFactory();
$carFactory = new CarFactory();
$handler = new DataHandler();
$handler->createCarsFromInput($engineFactory, $cargoFactory, $carFactory);
$handler->chooseCar();
