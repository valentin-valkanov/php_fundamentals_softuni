<?php declare(strict_types=1);

namespace Library;

class BookFactory
{
    public function create(
        string $title,
        string $author,
        string $publisher,
        string $releaseDate,
        string $Isbn,
        float $price,
    ): Book
    {
        return new Book($title, $author, $publisher, $releaseDate, $Isbn, $price);
    }
}