<?php
require_once 'Person.php';
require_once 'PersonRepository.php';

$repository = new PersonRepository();
$people = $repository->createPeopleFromInput();
$orderedPeople = $repository->sortPeopleByAge($people);
$repository->printPeople($orderedPeople);






