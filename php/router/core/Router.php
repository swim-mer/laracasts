<?php

/*
// Router class
*/

class Router
{
  protected $routes = [];

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri)
  {
    // array_key_exists(key, search)
    // uri: /about/local-wildlife
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    // throw exception if key (uri) not found
    throw new Exception('No route defined for this URI.');
  }
}
