<?php
// begin interpreting PHP
/*
  PHP 7 includes Scalar types:
  <?php declare(strict_types=1);
*/

// variable defined as $variable
// non-strict types pre-PHP 7
$greeting = 'Hello World';

echo $greeting;

// single quotes can be used to define a string
$name = 'Kelly';

// double quotes are necessary to mix chars and variables
echo "Hi $name";

// concatenate with .
echo 'Hello ' . $name;

// Reference a variable with mustache syntax for clarity
echo "Hello {$name}";

// end PHP with ? >
// If a file contains only php it is best practice to omit closing tag
