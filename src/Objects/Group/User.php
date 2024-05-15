<?php
declare(strict_types=1);

namespace App\Objects\Group;

class User
{
    private string $name;
    private array $dateAttended = [];
    private array $comments = [];

    public function __construct(string $name,)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDateAttended(): array
    {
        return $this->dateAttended;
    }

    public function addDate($date)
    {
        $this->dateAttended[] = $date;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function addComment($comment)
    {
        $this->comments[] = $comment;
    }
}