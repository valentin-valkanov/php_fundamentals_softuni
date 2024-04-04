<?php

$username = readline();
$passAttempt = readline();

login($username, $passAttempt);

function login(string $username, string $passwordAttempt): void{

    if(!validateInput($username)){
        echo 'Invalid input';
        return;
    }

    $password = strrev($username);
    $attempts = 0;
    $isBlocked = false;
    while ($passwordAttempt !== $password){
        $attempts ++;
        if($attempts >= 4){
            $isBlocked = true;
            echo "$username blocked";
            break;
        }
        echo "Incorrect password. Try again.";
        $passwordAttempt = readline();
    }
    if(!$isBlocked){
        echo "User $username logged in.";
    }
}

function validateInput(string $username): bool
{
    if(!is_string($username)){
        return false;
    }
    return true;
}
