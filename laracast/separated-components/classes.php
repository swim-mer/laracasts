<?php

class Task {
  public $description;
  public $completed = false;
  public function __construct($description) {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }

  public function isComplete()
  {
    return $this->completed;
  }
}

$tasks_ = [
  new Task('Feed cat'),
  new Task('Take out trash'),
  new Task('Do dishes')
];

// complete task #2 (index 1)
$tasks_[1]->complete();
