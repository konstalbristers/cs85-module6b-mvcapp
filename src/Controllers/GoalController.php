<?php
namespace App\Controllers;

use App\Models\Goal;

class GoalController {
    public function handleRequest() {
        $goal = new Goal($_POST['name'] ?? 'Study Hours', $_POST['target'] ?? 100);

        if (isset($_POST['progress'])) {
            $goal->addProgress((int)$_POST['progress']);
        }

        include __DIR__ . '/../../views/goal_view.php';
    }
}
?>