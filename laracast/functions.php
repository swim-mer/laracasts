<?php

/* function syntax:
    function name($parameter1, $parameter2) {
      do something;
    }
*/

// function to die() and dump() an array with <pre> (preformatted) tags
// to preserve formatting
function dd($list) {
  echo '<pre>';
  die(var_dump($list));
}

// example of static method in action
class Static {
  // make method available globally without requiring instance
  public static function make()
  {
    echo 'Ta da!';
  }
}

// call static method without making instance of class
Static::make();
