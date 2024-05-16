<?php declare(strict_types=1);

namespace App\Associative\PlayingCard;

class HandFactory
{
    public function create(string $personName)
    {
        return new Hand($personName);
    }
}