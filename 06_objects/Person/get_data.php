<?php
require_once 'Person.php';
$input = readline();

$data = [];

while($input !== 'End'){
    $data[] = $input;
    $input = readline();
}

$people = [];

for($i = 0; $i < count($data); $i++){
    [$name, $id, $age] = explode(" ", $data[$i]);
    $person = new Person($name, $id, $age);
    $people[$person->getName($name)] = $person;
}

usort($people, function ($a, $b) {
    return $a->getAge() <=> $b->getAge();
});

print_r($people);

foreach($people as $person){
    echo "{$person->getName()} with {$person->getId()} is {$person->getAge()} years old." . PHP_EOL;
}




