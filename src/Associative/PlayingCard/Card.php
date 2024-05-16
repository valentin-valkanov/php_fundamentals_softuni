<?php
declare(strict_types=1);

namespace App\Associative\PlayingCard;
class Card
{
    private string $power;
    private string $type;

    public function __construct(string $power, string $type) {
        $this->power = $power;
        $this->type = $type;
    }

    public function calculateValue(): int {
        $multipliers = ['C' => 1, 'D' => 2, 'H' => 3, 'S' => 4];
        $powers = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9, '10' => 10, 'J' => 11, 'Q' => 12, 'K' => 13, 'A' => 14];
        $value = $powers[$this->power] * $multipliers[$this->type];
        return $value;
    }

    public function getPower(): string
    {
        return $this->power;
    }

    public function getType(): string
    {
        return $this->type;
    }


}