<?php
declare(strict_types=1);

namespace App\Objects\Projects;

require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new TeamFactory();
$handler = new TeamsHandler($factory);
$handler->createTeamsFromInput();
$handler->assignMembers();
$handler->printOutput();