<?php

$integer = readline();
divisor($integer);

function validateInteger($integer): bool
{
    if(!is_numeric($integer)){
        return false;
    }
    return true;
}

function divisor($integer)
{
    if(validateInteger($integer)){
        $biggestDivisor = null;
        $divisors = [2, 3, 6, 7, 10];

        foreach($divisors as $divisor){
            if ($integer % $divisor === 0){
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
    }
}

