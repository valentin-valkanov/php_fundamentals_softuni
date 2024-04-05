<?php
declare(strict_types=1);

class Printer
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

$printer = new Printer();
$printer->print($start, $end);