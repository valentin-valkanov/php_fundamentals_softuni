<?php declare(strict_types=1);

namespace App\Objects\Projects;

class TeamFactory
{
    public function create(string $name, string $creator): Team
    {
        return new Team($name, $creator);
    }
}