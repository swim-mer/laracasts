<?php

return [
    'database' => [
      'name' => 'animals',
      'username' => 'admin',
      'password' => 'root',
      'connection' => 'mysql:host=127.0.0.1',
      'options' => [
        PDO::ATTR_ERRMODE => ERRMODE_WARNING,
        PDO::ATTR_ERRMODE => ERRMODE_EXCEPTION
      ]
    ]
];
