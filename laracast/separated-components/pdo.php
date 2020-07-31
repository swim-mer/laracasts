<?php

require 'Task.php';

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'user', 'password');
} catch (PDOException $e) {
  die('Could not connect. ' . $e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks__ = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
