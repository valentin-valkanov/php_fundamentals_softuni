<?php
declare(strict_types=1);

class PrintSum
{
    public function print(int $start, int $end): void
    {
        $sum = 0;
        for($i = $start; $i <= $end; $i++){
            echo "$i ";
            $sum += $i;
        }

        print PHP_EOL . "Sum: $sum";
    }

}

$start = (int)readline();
$end = (int)readline();

$printer = new PrintSum();
$printer->print($start, $end);