<?php declare(strict_types=1);

namespace Projects;
require_once 'Team.php';
require_once 'TeamFactory.php';


class TeamsHandler
{
    private array $teams = [];
    private string $message = '';

    public function __construct(private TeamFactory $teamFactory)
    {
    }

    public function createTeamsFromInput()
    {
        $n = readline();

        for ($i = 0; $i < $n; $i++) {
            $input = explode("-", readline());
            [$teamCreator, $teamName] = $input;

            if (array_key_exists($teamName, $this->teams)) {
                $this->message .= "Team {$teamName} was already created!" . PHP_EOL;
                continue;
            }

            if (array_key_exists($teamCreator, $this->teams)) {
                $this->message .= "{$teamCreator} cannot create another team!" . PHP_EOL;
                continue;
            }

            $team = $this->teamFactory->create($teamName, $teamCreator);
            $this->teams[$teamName] = $team;
            $this->message .= "Team {$teamName} has been created by {$teamCreator}!" . PHP_EOL;
        }
    }

    public function assignMembers()
    {
        $input = readline();

        while ($input !== "end of assignment") {
            [$memberName, $teamName] = explode("->", $input);

            if (!array_key_exists($teamName, $this->teams)) {
                $this->message .= "Team {$teamName} does not exist!" . PHP_EOL;
                $input = readline();
                continue;
            }

            $team = $this->teams[$teamName];

            if ($team->isMember($memberName) || $team->getTeamCreator() === $memberName) {
                $this->message .= "Member {$memberName} cannot join team {$teamName}!" . PHP_EOL;
            } else {
                $team->addMember($memberName);
            }

            $input = readline();
        }

        echo $this->message;
    }


    public function printOutput()
    {
        // Sort teams by the count of members (descending) and then by name (ascending)
        uasort($this->teams, function ($team1, $team2) {
            if (count($team1->getMembers()) === count($team2->getMembers())) {
                return strcmp($team1->getName(), $team2->getName());
            }
            return count($team2->getMembers()) - count($team1->getMembers());
        });

        // Print teams and their members
        foreach ($this->teams as $team) {
            $creator = $team->getTeamCreator();
            $members = $team->getMembers();

            if(!empty($members)){
                echo "Team {$team->getName()}:" . PHP_EOL;
                echo "-{$creator}" . PHP_EOL;
                sort($members); // Sort members by name (ascending)

                foreach ($members as $member) {
                    echo "-- {$member}" . PHP_EOL;
                }


            }else{
                echo "Teams to disband:" . PHP_EOL;
                echo $team->getName();}
        }
    }
}

