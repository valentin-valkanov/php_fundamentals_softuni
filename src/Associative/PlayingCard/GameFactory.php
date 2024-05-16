<?php declare(strict_types=1);

namespace App\Associative\PlayingCard;

class GameFactory
{
    public function create(CardFactory $cardFactory, HandFactory $handFactory)
    {
        return new Game($cardFactory, $handFactory);
    }
}