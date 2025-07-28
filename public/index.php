<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\GoalController;

$controller = new GoalController();
$controller->handleRequest();
?>