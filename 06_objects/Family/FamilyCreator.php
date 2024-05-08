<?php declare(strict_types=1);

namespace Family;
require_once __DIR__ . '/../../vendor/autoload.php';

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
//        print_r($family->getPeople());
        $theOldestMember = $family->getOldestMember();
        echo $theOldestMember->getName() ." " . $theOldestMember->getAge();
    }
}