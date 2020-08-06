<?php

$greeting = 'Hello, ';

$name = $_GET['name'];

$vegetables = [
  'rhubarb',
  'asparagus',
  'squash',
  'celery'
];

$candies = [
  'gummy bears',
  'butterfinger',
  'airheads',
  'chocolate'
];

$tasks = [
  'title' => 'mail a card',
  'assigned_to' => 'Penelope',
  'due' => 'tomorrow',
  'completed' => false
];


$colors = [
  'blue',
  'yellow',
  'green'
];

$query = require 'bootstrap.php';

$tasks__ = $query->selectAll('todos');

require 'Task.php';
require 'index.view.php';
