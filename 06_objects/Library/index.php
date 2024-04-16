<?php

use Library\BookRepository;
use Library\Library;

require_once 'BookRepository.php';
require_once 'Library.php';
require_once 'Book.php';

$bookFactory = new \Library\BookFactory();
$repository = new BookRepository($bookFactory);
$library = new Library('Zora', $repository->createListOfBooksFromInput());
$authors = $library->calculatePriceByAuthor();
$library->printPriceByAuthor($authors);
