<?php
declare(strict_types=1);
namespace Gold;

use GoldMiner;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'GoldMiner.php';

$goldMiner = new GoldMiner();
$goldMiner->readData();
$goldMiner->printGoldTypes();