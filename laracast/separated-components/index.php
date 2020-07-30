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

require 'functions.php';
require 'classes.php';
require 'index.view.php';
