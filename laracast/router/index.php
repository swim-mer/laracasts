<?php

$database = require 'core/bootstrap.php';

$routes = [
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'about/local-wildlife' => 'controllers/about-local-wildlife.php',
]
