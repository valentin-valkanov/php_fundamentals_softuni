<?php
declare(strict_types=1);

namespace App\Associative\PlayingCard;

require_once __DIR__ . '/../../../vendor/autoload.php';

$handFactory = new HandFactory();
$cardFactory = new CardFactory();
$gameFactory = new GameFactory();

$gameHandler = new GameHandler($gameFactory, $cardFactory, $handFactory);
$gameHandler->play();

