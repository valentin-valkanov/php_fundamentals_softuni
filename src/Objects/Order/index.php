<?php

namespace App\Objects\Order;

require_once __DIR__ . '/../../../vendor/autoload.php';
$factory = new PersonFactory();

$handler = new PersonsHandler($factory);

$handler->createPersonsFromInput($factory);

$handler->printOrderedPersons();






