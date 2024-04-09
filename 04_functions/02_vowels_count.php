<?php
$string = readline();
findNumberOfVowels($string);
function findNumberOfVowels($word){
    if(!validateLatinLetters($word)){
        echo 'Invalid input';
        return;
    }
    $numberOfVowels = 0;
    for($i=0; $i<strlen($word); $i++){
        if(in_array(ord($word[$i]), [65, 69, 73, 79, 85, 97, 101, 105, 111, 117])){
            $numberOfVowels ++;
        }
    }
    echo $numberOfVowels;
}

function validateLatinLetters(string $input): bool {
    return preg_match('/^[a-zA-Z]+$/', $input) === 1;
}
