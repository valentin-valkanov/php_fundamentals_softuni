<?php

namespace App\Objects\Order;

require_once __DIR__ . '/../../../vendor/autoload.php';
$factory = new PersonFactory();

$handler = new PersonsHandler();

$handler->createPersonsFromInput($factory);

$handler->printOrderedPersons();






