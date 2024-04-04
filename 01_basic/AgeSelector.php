<?php declare(strict_types=1);

class AgeSelector
{
    public function defineAge($input)
    {
        if($this->validateReadline($input)){
            switch(true){
                case($input >=0 && $input <=2):
                    echo 'baby';
                    break;
                case($input >=3 && $input <=13):
                    echo 'child';
                    break;
                case($input >=14 && $input <=19):
                    echo 'teenager';
                    break;
                case($input >=20 && $input <=65):
                    echo 'adult';
                    break;
                case($input >=66):
                    echo 'elder';
                    break;
            }
        }
    }

    public function validateReadline($input)
    {
        if (!is_numeric($input) || $input < 0) {
            echo 'Invalid input';
            return false;
        }
        return true;
    }
}

$input = readline();
$selector = new AgeSelector();
$selector->defineAge($input);