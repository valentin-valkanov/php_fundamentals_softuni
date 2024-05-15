<?php
declare(strict_types=1);

namespace App\Objects\Group;

class Group
{
    private array $users = [];

    public function getUsers(): array
    {
        return $this->users;
    }

    public function addUser($user)
    {
        $this->users[] = $user;
    }

    public function __toString(): string
    {
        // Sort users by name (ascending)
        usort($this->users, function ($a, $b) {
            return strcmp($a->getName(), $b->getName());
        });

        $result = '';
        foreach ($this->users as $user) {
            $result .= $user->getName() . PHP_EOL;
            $result .= 'Comments:' . PHP_EOL;
            $comments = $user->getComments();
            foreach ($comments as $comment){
                $result .= "- $comment" . PHP_EOL;
            }


            // Sort dates for the current user in ascending order
            $dates = $user->getDateAttended();
            sort($dates);


            foreach ($dates as $date) {
                if(count($dates) === 0){
                    $result .= 'Dates attended:' .PHP_EOL;
                }
                $result .= 'Dates attended:' . PHP_EOL;
                $result .= "-- $date" . PHP_EOL;
            }
        }
        return $result;
    }
}