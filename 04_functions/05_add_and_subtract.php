<?php
$firstNumber = (int)readline();
$secondNumber = (int)readline();
$thirdNumber = (int)readline();
$sum = sum($firstNumber, $secondNumber);
echo subtract($sum, $thirdNumber);

function sum($firstInt, $secondInt): int
{
    return $firstInt + $secondInt;
}

function subtract($minuend, $subtrahend)
{
    return $minuend - $subtrahend;
}

