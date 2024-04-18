<?php
declare(strict_types=1);

namespace Group;

require_once 'UserFactory.php';
require_once 'GroupFactory.php';
require_once 'Group.php';

class UserRepository
{
    public function __construct(private UserFactory $userFactory,
                                private GroupFactory $groupFactory,
                                private Group $group
    )
    {
    }

    public function createUserFromInput()
    {
        $input = readline();
        while ($input !== 'end of dates') {
            $data = explode(' ', $input);
            $name = $data[0];
            $user = $this->userFactory->create($name);

            if (count($data) > 1) {
                $dates = explode(",", $data[1]);
                foreach ($dates as $date) {
                    $user->addDate($date);
                }
            }

            // Add the user to the group
            $this->addUserToGroup($user);

            $input = readline();
        }
    }

    public function addComments()
    {
        $input = readline();

        while($input != 'end of comments'){
            $data = explode('-', $input);
            $name = $data[0];
            $comment = $data[1];

            foreach($this->group->getUsers() as $user){
                if($user->getName() == $name){
                    $user->addComment($comment);
                }
            }
            $input = readline();
        }
    }

    public function addUserToGroup($user)
    {
        // Get the names of all users in the group
        $userNames = array_map(function ($user) {
            return $user->getName();
        }, $this->group->getUsers());

        // Check if the user's name exists in the group
        if (!in_array($user->getName(), $userNames)) {
            $this->group->addUser($user);
        }
    }
}