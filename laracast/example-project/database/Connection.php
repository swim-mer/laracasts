<?php

class Connection
{
  // make method available globally without requiring instance
  public static function make()
  {
    try {
      $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'user', 'password');
    } catch (PDOException $e) {
      die('Could not connect. ' . $e->getMessage());
    }
  }
}
