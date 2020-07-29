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

require 'index.view.php';
