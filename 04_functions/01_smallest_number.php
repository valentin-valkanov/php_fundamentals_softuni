<?php

$firstNumber = readline();
$secondNumber = readline();
$thirdNumber = readline();

findSmallestNumber($firstNumber, $secondNumber, $thirdNumber);
function findSmallestNumber(...$params)
{
    $smallest = min($params);
    echo $smallest;
}
