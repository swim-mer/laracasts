<?php

/* if else syntax:
    if (condition) {
      do thing;
    } else {
      do other thing;
    }
*/

$tasks = [
  'description' => 'mail card',
  'assignee' => 'Annie',
  'due' => 'tomorrow',
  'completed' => true
];

// if true
if ($tasks['completed']) {
  echo 'Good job!';
}

// if false
if (! $tasks['completed']) {
  echo 'Get to work!'
}
