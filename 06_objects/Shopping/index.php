<?php
namespace Shopping;

require_once __DIR__ . '/../../vendor/autoload.php';

$personFactory = new PersonFactory();
$productFactory = new ProductFactory();
$manager = new ShoppingManager();
$manager->createPeopleAndProductsFromInput($personFactory, $productFactory);
$manager->calculatePurchases();
$manager->printPurchases();