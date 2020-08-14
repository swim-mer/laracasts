<?php

$animals = $database->selectAll('animals');

require 'views/index.view.php';
