<?php

$input = readline();
recogniseAges($input);

function recogniseAges($input)
{
    if(validateReadline($input)){
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

function validateReadline(string $input): bool
{
    if (!is_numeric($input) || $input < 0) {
        echo 'Invalid input';
        return false;
    }
    return true;
}

