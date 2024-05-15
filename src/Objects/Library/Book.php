<?php
declare(strict_types=1);

namespace App\Objects\Library;

class Book
{
    public function __construct(
        private string $name,
        private string $author,
        private string $publisher,
        private string $releaseDate,
        private string $Isbn,
        private float $price,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    public function getIsbn(): string
    {
        return $this->Isbn;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}