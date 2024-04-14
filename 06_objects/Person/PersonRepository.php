<?php declare(strict_types=1);

class PersonRepository
{
    public function createPeopleFromInput()
    {
        $input = readline();
        $data = [];

        while($input !== 'End'){
            $data[] = $input;
            $input = readline();
        }

        $people = [];

        for($i = 0; $i < count($data); $i++){
            [$name, $id, $age] = explode(" ", $data[$i]);
            $person = new Person($name, $id, (int)$age);
            $people[] = $person;
        }

        return $people;
    }

    public function sortPeopleByAge($people):array
    {
         usort($people, function ($a, $b) {
            return $a->getAge() <=> $b->getAge();
        });

        return $people;
    }

    public function printPeople($people)
    {
        foreach($people as $person){
            echo "{$person->getName()} with {$person->getId()} is {$person->getAge()} years old." . PHP_EOL;
        }
    }

}