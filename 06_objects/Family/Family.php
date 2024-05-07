<?php declare(strict_types=1);

namespace Family;

require_once 'Person.php';
class Family
{
   private array $people = [];

   public function addMember(Person $member)
   {
       $this->people[] = $member;
   }

   public function getOldestMember(): Person
   {
       $max = 0;
       $index = 0;
       $iteration = 0;
       foreach ($this->people as $person)
       {
           if($person->getAge() > $max){
               $max = $person->getAge();
               $index = $iteration;
               $iteration ++;
           }
       }
       return $this->people[$index];
   }
}

$person = new Person('Acho', 23);
$person = new Person('Pesho', 42);
$family = new Family();
$family->addMember($person);
print_r($family->getOldestMember());
