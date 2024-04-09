<?php
$n_1 = readline();
$n_2 = readline();

printChars($n_1, $n_2);
function printChars($firstChar, $secondChar)
{
    $firstChar = ord($firstChar);
    $secondChar = ord($secondChar);

    if ($firstChar < 0 || $firstChar > 255 || $secondChar < 0 || $secondChar > 255) {

        echo "Invalid input. Please enter valid ASCII values.";
        return;
    }

    $firstChar > $secondChar ? list($firstChar, $secondChar) = [$secondChar, $firstChar]: null;

    $array = [];
    for($i=$firstChar+1; $i<$secondChar; $i++){

        $array[] = chr($i);
    }
    echo implode(" ", $array);
}