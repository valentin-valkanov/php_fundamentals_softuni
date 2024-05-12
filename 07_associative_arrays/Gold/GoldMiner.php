<?php
declare(strict_types=1);

class GoldMiner
{
    private array $goldTypes = [];
    public function readData()
    {
        $data = readline();
        $i = 0;

        while ($data !== 'stop'){
            if($i % 2 == 0){
                $type = $data;
                $i++;

            }else{
                $karat = $data;
                $i++;
            }
            dump($type) . PHP_EOL;
            dump($karat);

            $this->addGold($type, $karat);

            $data = readline();
        }
        dd($this->goldTypes);
    }

    public function printGoldTypes()
    {

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