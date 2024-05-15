<?php

namespace App\Family;


use App\Objects\Family\FamilyCreator;
use App\Objects\Family\FamilyFactory;
use App\Objects\Family\PersonFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

$family = new FamilyFactory();
$person = new PersonFactory();
$familyCreator = new FamilyCreator();
$familyCreator->createFamilyFromInput($person, $family);