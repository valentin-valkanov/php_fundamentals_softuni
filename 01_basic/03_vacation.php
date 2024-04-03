<?php

function validateInput($numberOfPeople, $type, $day) {
    $days = ['Friday', 'Saturday', 'Sunday'];
    $groups = ['Students', 'Business', 'Regular'];

    if (!is_numeric($numberOfPeople) || $numberOfPeople <= 0 || !in_array($type, $groups) || !in_array($day, $days)) {
        echo 'Invalid input';
        return false;
    }
    return true;
}

function calculatePricePerStudents($day, $people)
{
    switch ($day) {
        case 'Friday':
            $pricePerPerson = 8.45;
            break;
        case 'Saturday':
            $pricePerPerson = 9.80;
            break;
        case 'Sunday':
            $pricePerPerson = 10.46;
            break;
    }

    if($people >= 30){
        $total = $people * $pricePerPerson * 0.85;
        return $total;
    }

    $total = $people * $pricePerPerson;
    return $total;
}

function calculateBusinessPrice($day, $people)
{
    switch ($day) {
        case 'Friday':
            $pricePerPerson = 10.90;
            break;
        case 'Saturday':
            $pricePerPerson = 15.60;
            break;
        case 'Sunday':
            $pricePerPerson = 16.00;
    }

    if($people >= 100){
        $total = ($people - 10) * $pricePerPerson;
        return $total;
    }

    $total = $people * $pricePerPerson;
    return $total;
}

function calculateRegularPrice($day, $people)
{
    switch ($day) {
        case 'Friday':
            $pricePerPerson = 15.00;
            break;
        case 'Saturday':
            $pricePerPerson = 20.00;
            break;
        case 'Sunday':
            $pricePerPerson = 22.50;
    }

    if($people >= 10 && $people <= 20){
        $total = $people * $pricePerPerson * 0.95;
        return $total;
    }

    $total = $people * $pricePerPerson;
    return $total;
}

$numberOfPeople = readline();
$type = readline();
$day = readline();

switch ($type){
    case 'Students':
        $total = calculatePricePerStudents($day, $numberOfPeople);
        break;
    case 'Business':
        $total = calculateBusinessPrice($day, $numberOfPeople);
        break;
    case 'Regular':
        $total = calculateRegularPrice($day, $numberOfPeople);
        break;
}

echo sprintf('Total price: %.2f', $total);