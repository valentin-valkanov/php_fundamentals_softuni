<?php
$numberOfWagons = readline();

calculateNumberOfPeople($numberOfWagons);
function calculateNumberOfPeople($wagons)
{
    $people = [];
    for ($i = 0; $i < $wagons; $i++){
        $numberOfPeople = (int)readline();
        $people[] = $numberOfPeople;
    }

    for ($i = 0; $i<count($people); $i++){
        echo "$people[$i] ";
    }
    echo PHP_EOL . array_sum($people);
}