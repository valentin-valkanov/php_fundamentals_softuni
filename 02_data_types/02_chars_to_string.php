<?php

$firstChar = readline();
$secondChar = readline();
$thirdChar = readline();

concatenateChars($firstChar, $secondChar, $thirdChar);

function concatenateChars(...$chars) {
    echo implode('', $chars);
}