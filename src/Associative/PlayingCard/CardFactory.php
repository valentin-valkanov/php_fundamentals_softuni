<?php declare(strict_types=1);

namespace App\Associative\PlayingCard;

class CardFactory
{
    public function create(string $power, string $type)
    {
        return new Card($power, $type);
    }
}