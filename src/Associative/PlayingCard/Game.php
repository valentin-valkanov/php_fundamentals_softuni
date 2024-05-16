<?php declare(strict_types=1);

namespace App\Associative\PlayingCard;

class Game
{
    private array $hands = [];

    public function __construct(private CardFactory $cardFactory, private HandFactory $handFactory)
    {
    }

    public function addCardToHand(string $personName, string $power, string $type): void {
        if (!isset($this->hands[$personName])) {
            $hand = $this->handFactory->create($personName);
            $this->hands[$personName] = $hand;
        }
        $card = $this->cardFactory->create($power, $type);

        $this->hands[$personName]->addCard($card);
    }

    public function printTotalValues(): void {
        foreach ($this->hands as $hand) {
            echo $hand->getPersonName() . ": " . $hand->calculateTotalValue() . PHP_EOL;
        }
    }
}