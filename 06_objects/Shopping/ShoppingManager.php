<?php declare(strict_types=1);

namespace Shopping;

class ShoppingManager
{
    private array $people = [];
    private array $availableProducts = [];

    private string $print = '' . PHP_EOL;

    public function createPeopleAndProductsFromInput(
        PersonFactory $personFactory,
        ProductFactory $productFactory)
    {
        for ($i = 0; $i < 2; $i++){
            $data = explode(";", readline());

            foreach($data as $element){
                [$name, $number] = explode("=", $element);

                if($i === 0){
                    $person = $personFactory->create($name, (int)$number);
                    $this->people[] = $person;

                }elseif ($i === 1){
                    $product = $productFactory->create($name, (int)$number);
                    $this->availableProducts[] = $product;
                }
            }
        }
    }

    public function calculatePurchases()
    {
        $input = readline();

        while ($input !== 'END'){
            $purchases = explode(" ", $input);
            [$personName, $productName] = $purchases;

            foreach ($this->people as $person){

                if($personName === $person->getName()){
                    $priceOfProduct = $this->getPriceOfProduct($productName);

                    if($priceOfProduct > $person->getMoney()){
                        $this->print .= "{$person->getName()} can't afford {$productName}" . PHP_EOL;

                    }else{
                        $person->setMoney($person->getMoney() - $priceOfProduct);
                        $person->addProducts($productName);
                        $this->print .= "{$person->getName()} bought $productName" . PHP_EOL;
                    }
                }
            }
            $input = readline();
        }
    }

    public function getPriceOfProduct($searchedProduct): int
    {
        foreach($this->availableProducts as $product){

            if($product->getName() === $searchedProduct){

                $price = $product->getCost();
            }
        }
        return $price;
    }

    public function printPurchases(): void
    {
        echo $this->print . PHP_EOL;


        foreach ($this->people as $person){
            $result = '';
            $count = count($person->getProducts());
            foreach($person->getProducts() as $index => $product){
                $result .= $product;
                if($index < $count - 1){
                    $result .= ", ";

                }
            }
            if(empty($person->getProducts())){
                echo "{$person->getName()} - Nothing bought" . PHP_EOL;
            }else{
                echo "{$person->getName()} - {$result}" .PHP_EOL;}
        }
    }
}