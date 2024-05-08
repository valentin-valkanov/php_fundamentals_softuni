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

