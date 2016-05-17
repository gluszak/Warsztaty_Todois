<?php
class Task {
    private $taskName;
    private $taskContent;
    
    public function __construct($taskName, $taskContent) {
    $this->taskName=is_string($taskName) ? $taskName:null;
    $this->taskContent=is_string($taskContent) ? $taskContent:null;
    }
    
    
    public function setTaskName($taskName) {
        $this->taskName=is_string($n) ? $taskName:null;
    }
    
    public function getTaskName ($taskName) {
        return $this->taskName;
    }
    
    public function setTaskContent($taskContent) {
        $this->taskContent=is_string($taskContent) ? $taskContent:null;
    }
    
    public function getTaskContent() {
        return $this->taskContent;
    }
    
}

var_dump ($zadanie1=new Task ("do domu", "isc do domu"));
