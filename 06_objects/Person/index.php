<?php

use Person\PersonFactory;

require_once 'Person.php';
require_once 'PersonRepository.php';
require_once 'PersonFactory.php';

$factory = new PersonFactory();

$repository = new PersonRepository($factory);

$people = $repository->createPeopleFromInput();

$orderedPeople = $repository->sortPeopleByAge($people);

$repository->printPeople($orderedPeople);






