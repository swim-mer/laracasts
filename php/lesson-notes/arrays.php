<?php

// array syntax: $array = [item1, item2];
$names = [
  'Alice',
  'Stella',
  'Bob',
  'Raoul'
];

// for loop syntax: foreach ($array as $item) { $item }
// analogous to Python: for item in array: item
foreach ($names as $name) {
  echo $name;
}

// push to array
$names[] = 'Ursula';
