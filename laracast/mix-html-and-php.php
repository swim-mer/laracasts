<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <title>Document</title>

  <style>

    header {

      background: #F08080;

      padding: 5em;

      text-align: center;

    }
  </style>

</head>

<body>

  <header>

    <h1>

      <?php
      // rename this file to index.php
      // run with php -S localhost:8888
      // navigate to http://localhost:8888/?name=YourName

        // $_GET is a super global variable (array)
        // 'name' is the key; YourName is the value
        $name = $_GET['name'];

        echo "Hello, {$name}";

        echo "\n";

        // htmlspecialchars() function forces the value to be read as chars
        // and will not execute code
        // : sanitizing inputs
        // update url to: http://localhost:888/?name<a%20href="https://www.lmgtfy.com">YourName</a>
        echo "Bye, " . htmlspecialchars($_GET['name']);

      ?>

    </h1>

    <p>

      <?= "What's the story, morning glory?"; ?>

    </p>

  </header>

</body>

</html>
