<?php
namespace App\Models;

class Goal {
    public $name;
    public $target;
    public $progress = 0;

    public function __construct($name, $target) {
        $this->name = $name;
        $this->target = $target;
    }

    public function addProgress($amount) {
        $this->progress += $amount;
        if ($this->progress > $this->target) {
            $this->progress = $this->target;
        }
    }

    public function getStatus() {
        $percentage = ($this->progress / $this->target) * 100;
        return "{$this->name}: {$this->progress}/{$this->target} (" . round($percentage) . "% complete)";
    }
    public function isComplete(): bool {
        return $this->progress >= $this->target;
    }
    
}
?>