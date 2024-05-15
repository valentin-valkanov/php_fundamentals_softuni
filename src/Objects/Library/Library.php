<?php declare(strict_types=1);

namespace App\Objects\Library;

class Library
{
    private string $name;
    private array $books;

    public function __construct(string $name, array $books)
    {
        $this->name = $name;
        $this->books = $books;
    }

    public function calculatePriceByAuthor()
    {
        $authors = [];
        foreach ($this->books as $book){
            $author = $book->getAuthor();
            $price = $book->getPrice();

            if(!array_key_exists($author, $authors)){
                $authors[$author] = $price;
            } else {
                $authors[$author] += $price;
            }
        }

        uasort($authors, function($a, $b) {
            // Sort by price descending
            if ($a != $b) {
                return $b <=> $a;
            }
            // If prices are equal, sort by author name ascending
            return strcmp($a, $b);
        });

        return $authors;
    }

    public function printPriceByAuthor($authors)
    {
        foreach ($authors as $author => $price){
            $formatPrice = number_format($price, 2, ".", "");
            echo "$author -> $formatPrice" . PHP_EOL;
        }
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

}