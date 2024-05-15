<?php

namespace App\Objects\Order;

require_once __DIR__ . '/../../../vendor/autoload.php';
$factory = new PersonFactory();

$handler = new PersonHandler($factory);

$handler->createPersonsFromInput($factory);

$orderedPeople = $repository->sortPeopleByAge($people);

$repository->printPeople($orderedPeople);






