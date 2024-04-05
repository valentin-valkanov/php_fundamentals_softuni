<?php declare(strict_types=1);

class Divisor
{
    public function divide($number)
    {
        if($this->validate($number)){
            $biggestDivisor = null;
            $divisors = [2, 3, 6, 7, 10];

            foreach($divisors as $divisor){
                if ($number % $divisor === 0){
                    if($divisor > $biggestDivisor){
                        $biggestDivisor = $divisor;
                    }
                }
            }

            if($biggestDivisor !== null){
                echo "The number is divisible by $biggestDivisor";
            }else {
                echo 'Not divisible';
            }
        }
    }

    public function validate($input)
    {
        if(!is_numeric($input)){
            return false;
        }
        return true;
    }
}

$input = readline();

$divisor = new Divisor();
$divisor->divide($input);