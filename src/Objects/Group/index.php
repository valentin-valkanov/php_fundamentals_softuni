<?php

declare(strict_types=1);
namespace App\Objects\Group;


require_once __DIR__ . '/../../../vendor/autoload.php';

$userFactory = new UserFactory();
$groupFactory = new GroupFactory();
$group = $groupFactory->create();
$repo = new UserRepository($userFactory, $groupFactory, $group);

// Populate the group with users
$repo->createUserFromInput();

// Add comments to the users in the group
$repo->addComments();

echo $group;