<?php

$townName = readline();
$population = readline();
$area = readline();

townInfo($townName, $population, $area);
function townInfo($name, $population, $area):void
{
    echo "Town $name has population of $population and area $area square km.";
}