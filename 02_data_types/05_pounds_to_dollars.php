<?php
const GBP_USD = 1.31;

$number = intval(readline());
poundConvertor($number);
function poundConvertor($currencies)
{
    $pounds = $currencies * GBP_USD;
    echo sprintf('%.3f', $pounds);
}