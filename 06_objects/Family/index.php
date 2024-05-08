<?php

namespace Family;

require_once __DIR__ . '/../../vendor/autoload.php';

$family = new FamilyFactory();
$person = new PersonFactory();
$familyCreator = new FamilyCreator();
$familyCreator->createFamilyFromInput($person, $family);