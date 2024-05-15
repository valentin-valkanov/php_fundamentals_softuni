<?php
declare(strict_types=1);

use App\Associative\Gold\GoldMiner;

require_once __DIR__ . '/../../vendor/autoload.php';

$goldMiner = new GoldMiner();
$goldMiner->readData();
$goldMiner->printGoldTypes();