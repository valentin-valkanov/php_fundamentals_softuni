<?php

use Library\BookRepository;
use Library\Library;

require_once 'BookRepository.php';
require_once 'Library.php';
require_once 'Book.php';

$repository = new BookRepository();
$library = new Library('Zora', $repository->createListOfBooksFromInput());
$authors = $library->calculatePriceByAuthor();
$library->printPriceByAuthor($authors);
