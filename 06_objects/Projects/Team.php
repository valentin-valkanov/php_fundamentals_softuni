<?php declare(strict_types=1);

namespace Projects;

class Team
{
    private string $name;
    private string $teamCreator;
    private array $members;
    public function __construct(string $name, string $teamCreator)
    {
        $this->name = $name;
        $this->teamCreator = $teamCreator;
        $this->members = [];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTeamCreator(): string
    {
        return $this->teamCreator;
    }

    public function setTeamCreator(string $teamCreator): void
    {
        $this->teamCreator = $teamCreator;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function addMember($member)
    {
        $this->members[] = $member;
    }

    public function isMember(string $member): bool
    {
        return in_array($member, $this->members);
    }

}