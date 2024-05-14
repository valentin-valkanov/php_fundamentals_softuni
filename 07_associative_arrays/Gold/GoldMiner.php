<?php
declare(strict_types=1);

namespace Gold;
class GoldMiner
{
    private array $goldTypes = [];
    public function readData()
    {
        while (true) {
            $type = readline();
            $karats = intval(readline());
            if ($type === "stop") {
                break;
            }
            if (key_exists($type, $this->goldTypes) == false) {
                $this->goldTypes[$type] = $karats;
            } else {
                $this->goldTypes[$type] += $karats;
            }
        }
    }


    public function printGoldTypes()
    {
        foreach ($this->getGoldTypes() as $type => $karat){
            echo $type." -> ".$karat."K" . PHP_EOL;
        }
    }

    public function addGold($key, $value)
    {
        $this->getGoldTypes()[$key] = $value;
    }

    public function getGoldTypes(): array
    {
        return $this->goldTypes;
    }
}