<?php

/* function syntax:
    function name($parameter1, $parameter2) {
      do something;
    }
*/

$colors = [
  'blue',
  'yellow',
  'green'
];


// function to die() and dump() an array with <pre> (preformatted) tags
// to preserve formatting
function dd($list) {
  echo '<pre>';
  die(var_dump($list));
}
