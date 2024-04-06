<?php
$number = readline();
convert($number);
function convert($meters)
{
    $kilometers = $meters / 1000;
    echo sprintf("%.2f", $kilometers);
}