<?php

$firstArray = explode(" ", readline());
$secondArray = explode(" ", readline());
findCommonElements($firstArray, $secondArray);

function findCommonElements($firstArray, $secondArray){
    for($i = 0; $i < count($secondArray); $i++){
        for($j = 0; $j < count($firstArray); $j++){
            if($secondArray[$i] === $firstArray[$j]){
                echo "$secondArray[$i] ";
            }
        }
    }
}
