<?php
$n = readline();

if(is_numeric($n)){
    zigzagArrays($n);
}
else{
    echo 'Invalid input';
}

function zigzagArrays(int $zigzags): void
{
        $firstArray = [];
        $secondArray = [];

        for($i = 0; $i < $zigzags; $i++){
            $input = explode(" ", readline());
            if(!validInput($input)){
                echo 'Invalid input';
                return;
            }

            if($i % 2 === 0){
                $firstArray[] = $input[0];
                $secondArray[] = $input[1];
            } else{
                $firstArray[] = $input[1];
                $secondArray[] = $input[0];
            }
        }
        echo implode(" ", $firstArray) . PHP_EOL;
        echo implode(" ", $secondArray) . PHP_EOL;

}

function validInput(array $input): bool
{
    foreach ($input as $value) {
        if (!is_numeric($value)) {
            return false;
        }
    }
    return true;
}
