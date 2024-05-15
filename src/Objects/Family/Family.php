<?php declare(strict_types=1);

namespace App\Objects\Family;
class Family
{
   private array $people = [];

   public function addMember(Person $member)
   {
       $this->people[] = $member;
   }

   public function getOldestMember(): Person
   {
       $oldestPerson = $this->people[0];
       foreach ($this->people as $person)
       {
           if($person->getAge() > $oldestPerson->getAge()){
               $oldestPerson = $person;
           }
       }
       return $oldestPerson;
   }
}

