<?php declare(strict_types=1);

namespace App\Associative\PlayingCard;

class GameHandler
{

    public function __construct(
        private GameFactory $gameFactory,
        private CardFactory $cardFactory,
        private HandFactory $handFactory)
    {
    }

    public function play(): void {
        $game = $this->gameFactory->create($this->cardFactory, $this->handFactory);
        $line = readline();

        while ($line !== 'JOKER') {
            [$person, $cardsString] = explode(': ', $line);
            $cards = explode(', ', $cardsString);

            foreach ($cards as $cardString) {
                [$power, $type] = str_split($cardString, strlen($cardString) - 1);
                $game->addCardToHand($person, $power, $type);
            }

            $line = readline();
        }
        $game->printTotalValues();
    }
}