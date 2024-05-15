<?php
namespace App\Objects\Racing;

require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new CarFactory();
$handler = new CarHandler();
$handler->readCarsFromInput($factory);
$handler->readCommands();
$handler->printCars();