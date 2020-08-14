<?php

class Connection
{
  public static function make($config)
  {
    try {
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die('Could not connect. ' . $e->getMessage());
    }
  }
}

/* make new connection with:
    $pdo = Connection::make();
*/
