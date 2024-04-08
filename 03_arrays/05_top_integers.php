<?php
$input = array_map("intval", explode(" ", readline()));

findTopInt($input);
function findTopInt($input)
{
    $topIntegers = [];

    for($i=0; $i<count($input); $i++){
        $currentElement = $input[$i];
        $isBiggest = true;

        for($j=$i+1; $j<count($input); $j++) {
            $nextElement = $input[$j];

            if($currentElement <= $nextElement) {
                $isBiggest = false;
                break;

            }
        }
        if($isBiggest){
            $topIntegers[] = $currentElement;
        }
    }
    echo implode(" ", $topIntegers);
}