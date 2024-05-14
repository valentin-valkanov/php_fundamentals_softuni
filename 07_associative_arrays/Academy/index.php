<?php

declare(strict_types=1);

use Academy\StudentsDispatcher;

require_once __DIR__ . '/../../vendor/autoload.php';

$dispatcher = new StudentsDispatcher();
$dispatcher->readData();