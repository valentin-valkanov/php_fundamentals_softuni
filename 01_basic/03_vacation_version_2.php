<?php

$numberOfPeople = readline();
$groupType = readline();
$weekDay = readline();

$priceTable = ['Students' => [
    'Friday' => 8.45,
    'Saturday' => 9.80,
    'Sunday' => 10.46
],
    'Business' => [
        'Friday' => 10.90,
        'Saturday' => 15.60,
        'Sunday' => 16.00
    ],
    'Regular' => [
        'Friday' => 15.00,
        'Saturday' => 20.00,
        'Sunday' => 22.50
    ]];
echo calculatePrice($groupType, $weekDay, $numberOfPeople,$priceTable);

function calculatePrice($groupType, $weekDay, $numberOfPeople, $priceTable) {
    if (!isValidInput($groupType, $weekDay, $numberOfPeople)) {
        return 'Invalid input';
    }

    $pricePerPerson = $priceTable[$groupType][$weekDay];
    $totalPrice = calculateTotalPrice($groupType, $numberOfPeople, $pricePerPerson);

    return sprintf('Total price: %.2f', $totalPrice);
}

function isValidInput($groupType, $weekDay, $numberOfPeople) {
    $validDays = ['Friday', 'Saturday', 'Sunday'];
    $validGroups = ['Students', 'Business', 'Regular'];

    return is_numeric($numberOfPeople) && $numberOfPeople > 0 &&
        in_array($groupType, $validGroups) && in_array($weekDay, $validDays);
}

function calculateTotalPrice($groupType, $numberOfPeople, $pricePerPerson) {
    switch ($groupType) {
        case 'Students':
            $discount = ($numberOfPeople >= 30) ? 0.85 : 1;
            break;
        case 'Business':
            $discount = ($numberOfPeople >= 100) ? 0.9 : 1;
            break;
        case 'Regular':
            $discount = ($numberOfPeople >= 10 && $numberOfPeople <= 20) ? 0.95 : 1;
            break;
        default:
            $discount = 1;
    }

    return $numberOfPeople * $pricePerPerson * $discount;
}
