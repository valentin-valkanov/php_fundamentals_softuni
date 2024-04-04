<?php

$start = readline();
$end = readline();

$sum = 0;
for($i = $start; $i <= $end; $i++){
    echo "$i ";
    $sum += $i;
}

echo PHP_EOL . "Sum: $sum";
