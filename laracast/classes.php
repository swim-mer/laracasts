<?php

/* class syntax:
    class Name {}
*/

class Task {
  protected $description;
  protected $completed = false;
  // method inside a class
  // constructor for Task class
  // automatically triggered on instantiation
  public function __construct($description)
  {
    // set a property of the class instance
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



// instantiate a new object instance of Task class
$task = new Task('Go to the store');

// cannot do this because $description is protected
$task->description;

// complete a Task
$task->complete();

// find complete status of task
$task->isComplete();
