<?php declare(strict_types=1);

namespace App\Objects\Order;

class PersonsHandler
{
    private array $people = [];
    public function createPersonsFromInput(PersonFactory $personFactory)
    {
        while (true){
            $data = readline();
            if($data === 'End'){
                break;
            }

            [$name, $id, $age] =explode(" ", $data);
            $person = $personFactory->create($name, $id, (int)$age);
            $this->people[] = $person;
        }
        dd($this->people);
    }

    public function printOrderedPersons()
    {
        usort($this->people, fn($a, $b) => $a->getAge() <=> $b->getAge());
        dd($this->people);
    }
}