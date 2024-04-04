<?php
declare(strict_types=1);

class Login
{
    private string $username;
    private string $password;

    public function __construct(string $username)
    {
        $this->username = $username;
        $this->password = strrev($username);
    }

    public function login(string $username, string $passwordAttempt): void
    {

        if(!$this->validateInput($username)){
            echo 'Invalid input';
            return;
        }

        $attempts = 0;
        $isBlocked = false;
        while ($passwordAttempt !== $this->password){
            $attempts ++;
            if($attempts >= 4){
                $isBlocked = true;
                echo "$this->username blocked";
                break;
            }
            echo "Incorrect password. Try again.";
            $passwordAttempt = readline();
        }
        if(!$isBlocked){
            echo "User $this->username logged in.";
        }
    }

    public function validateInput(string $username): bool
    {
        if(!is_string($username)){
            return false;
        }
        return true;
    }
}

$user = readline();
$passAttempt = readline();

$loginSystem = new Login($user, $passAttempt);
$loginSystem->login($user, $passAttempt);



