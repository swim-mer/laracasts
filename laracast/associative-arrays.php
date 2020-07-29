<?php

// associative array syntax: $array = ['key' => value];
$person = [
  'age' => 70,
  'hair' => 'gray',
  'career' => 'retired'
];

// loops through values
foreach ($person as $feature) {
  echo $feature;
}

// loops through keys
foreach ($person as $feature => $description) {
  echo $feature;
}

// push to an associative array
$person['name'] = 'Joan';

// remove key, val pair from an associative array
unset($person['hair']);

// print a specific value
echo $person['career'];

// print associative array or other complex type
var_dump($person);

// add in HTML tags to preserve formatting
echo '<pre>';
var_dump($person);
echo '<pre>';

// die() will print contents and then prevent following

// prints
die(var_dump($person));

// same as:
var_dump($person);
die();

// doesn't print after die()
var_dump($person);
