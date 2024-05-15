<?php declare(strict_types=1);

namespace App\Objects\Family;

class FamilyCreator
{
    public function createFamilyFromInput(PersonFactory $personFactory, FamilyFactory $familyFactory): void
    {
        $family = $familyFactory->create();
        $n = readline();
        for ($i = 0; $i < $n; $i++){
            $input = explode(" ", readline());
            [$name, $age] = $input;
            $member = $personFactory->create($name, (int)$age);
            $family->addMember($member);

        }

        $theOldestMember = $family->getOldestMember();
        echo $theOldestMember->getName() . " " . $theOldestMember->getAge();
    }
}