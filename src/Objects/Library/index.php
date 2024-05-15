<?php


use App\Objects\Library\BookFactory;
use App\Objects\Library\BookRepository;
use App\Objects\Library\Library;

require_once __DIR__ . '/../../../vendor/autoload.php';

$bookFactory = new BookFactory();

$repository = new BookRepository($bookFactory);

$library = new Library('Zora', $repository->createListOfBooksFromInput());

$authors = $library->calculatePriceByAuthor();

$library->printPriceByAuthor($authors);
