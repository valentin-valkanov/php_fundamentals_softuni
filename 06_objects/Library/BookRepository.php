<?php declare(strict_types=1);

namespace Library;
require_once 'Library.php';
require_once 'Book.php';
require_once 'BookFactory.php';
class BookRepository
{
    public function __construct(private BookFactory $factory)
    {
    }

    public function createListOfBooksFromInput(): array
    {
        $n = readline();
        $input = readline();

        $data = [];

        for($i=0; $i<$n; $i++){
            $data[] = explode(" ", $input);
            $input = readline();
        }

        $books = [];

        foreach ($data as $item) {
            $title = $item[0];
            $author = $item[1];
            $publisher = $item[2];
            $releaseDate = $item[3];
            $Isbn = $item[4];
            $price = (float)$item[5];
            $book = $this->factory->create($title, $author, $publisher, $releaseDate, $Isbn, $price);
            $books[] = $book;
            }
        return $books;
    }
}
