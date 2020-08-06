<?php

class Connection
{
  public static function make()
  {
    try {
      return new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'user', 'password');
    } catch (PDOException $e) {
      die('Could not connect. ' . $e->getMessage());
    }
  }
}

/* make new connection with:
    $pdo = Connection::make();
*/
