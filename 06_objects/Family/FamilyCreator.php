<?php declare(strict_types=1);

namespace Family;
require_once 'PersonFactory.php';
require_once 'FamilyFactory.php';

class FamilyCreator
{
    public function createFamilyFromInput()
    {
        $n = readline();
        for ($i = 0; $i < $n; $i++) {
            [$name, $age] = explode(" ", readline());
            $member =
        }
    }
}