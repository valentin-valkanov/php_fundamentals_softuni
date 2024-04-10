<?php

$pass = readline();
validatePassword($pass);

function validatePassword($password): void
{
    $isValid = true;

    if(!checkLength($password)){
        $isValid = false;
        echo 'Password must be between 6 and 10 characters' . PHP_EOL;
    }

    if(!checkDigitsAndLetters($password)){
        $isValid = false;
        echo 'Password must consist only of letters and digits' . PHP_EOL;
    }

    if(!checkTwoDigitsRule($password)){
        $isValid = false;
        echo 'Password must have at least 2 digits' . PHP_EOL;
    }

    if($isValid){
        echo 'Password is valid';
        return;
    }

}
function checkLength(string $password): bool
{
    if( strlen($password) < 6 || strlen($password) > 10){
        return false;
    }

    return true;
}

function checkDigitsAndLetters(string $password): bool
{
    if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
        return false;
    }

    return true;
}

function checkTwoDigitsRule(string $password): bool
{
    $digitsCount = 0;
    for($i=0; $i<strlen($password); $i++){
        if(is_numeric($password[$i])){
            $digitsCount ++;
        }
    }

    if($digitsCount < 2){
        return false;
    }

    return true;
}
