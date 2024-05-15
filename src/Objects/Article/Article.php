<?php

declare(strict_types=1);

namespace App\Objects\Article;

class Article
{
    private string $title;
    private string $content;
    private string $author;

    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function edit($newContent)
    {
        $this->setContent($newContent);
    }

    public function changeAuthor($newAuthor)
    {
        $this->setAuthor($newAuthor);
    }

    public function rename($title)
    {
        $this->setTitle($title);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function __toString(): string
    {
        return "{$this->getTitle()} - {$this->getContent()}: {$this->getAuthor()}";
    }
}

