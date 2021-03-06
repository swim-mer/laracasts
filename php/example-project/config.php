<?php

return [
  'database' => [
    'name' => 'mytodos',
    'username' => 'user',
    'password' => 'password',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      // Throw exceptions on page 
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      // Display warnings on page
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]
];
