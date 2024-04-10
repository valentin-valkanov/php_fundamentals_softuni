<?php

$firstNumber = (int)readline();
$secondNumber = (int)readline();
$thirdNumber = (int)readline();

echo subtractTwoInt(function($a, $b){
    return $a + $b;
}, $firstNumber, $secondNumber, $thirdNumber);

function subtractTwoInt(callable $sumFunction, $firstInt, $secondInt, $thirdInt)
{
    $sum = $sumFunction($firstInt, $secondInt);
    return $sum - $thirdInt;
}