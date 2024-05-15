<?php declare(strict_types=1);

namespace App\Objects\Order;

class PersonHandler
{
    private array $people = [];
    public function createPersonsFromInput(PersonFactory $personFactory)
    {
        while (true){
            $data = readline();
            if($data === 'End'){
                break;
            }

            [$name, $id, $age] = explode(" ", readline());
            $person = $personFactory->create($name, $id, (int)$age);
            $this->people[] = $person;
        }
        dd($this->people);
    }
}