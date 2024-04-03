<?php
$input = readline();

if(!is_numeric($input)){
    echo 'Invalid input';
    return;
    }

$biggestDivisor = null;
$divisors = [2, 3, 6, 7, 10];

foreach($divisors as $divisor){
    if ($input % $divisor === 0){
        if($divisor > $biggestDivisor){
            $biggestDivisor = $divisor;
        }
    }
}

if($biggestDivisor !== null){
    echo "The number is divisible by $biggestDivisor";
}else {
    echo 'Not divisible';
}