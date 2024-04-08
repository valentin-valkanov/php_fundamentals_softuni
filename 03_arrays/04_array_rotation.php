<?php

$stringArray = readline();
$numberOfRotation = readline();

printArray(rotateArray($stringArray, $numberOfRotation));
function rotateArray($stringArray, $numberOfRotation): array
{
    $array = explode(" ", $stringArray);
    for ($i = 0; $i < $numberOfRotation; $i++){
        $element = array_shift($array);
        $array[] = $element;
    }
    return $array;
}

function printArray($array)
{
    echo implode(" ", $array);
}