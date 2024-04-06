<?php
declare(strict_types=1);

$number = readline();
calculateSum($number);
function calculateSum($number):void
{
    $sum = 0;
    for($i = 0; $i < strlen($number); $i++){
        $sum += (int)$number[$i];
    }
    echo $sum;
}