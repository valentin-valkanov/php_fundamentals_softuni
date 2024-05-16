<?php
declare(strict_types=1);

namespace App\Associative\PlayingCard;

class Hand
{
    private string $personName;
    private array $cards = [];

    public function __construct(string $personName) {
        $this->personName = $personName;
    }

    public function addCard(Card $card): void {
        foreach ($this->cards as $existingCard) {
            if ($existingCard->getPower() === $card->getPower() && $existingCard->getType() === $card->getType()) {

                return;
            }
        }
        $this->cards[] = $card;
    }

    public function calculateTotalValue(): int {
        $totalValue = 0;
        foreach ($this->cards as $card) {
            $totalValue += $card->calculateValue();
        }
        return $totalValue;
    }

    public function getPersonName(): string {
        return $this->personName;
    }
}