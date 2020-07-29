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

      <?= $greeting . $name; ?>

    </h1>

  </header>

</body>

  <ul>

    <?php

      // alternative for (shorthand)
      foreach ($vegetables as $vegetable) : ?>

      <li><?= $name . ' eats ' . $vegetable; ?></li>

    <?php endforeach; ?>

  </ul>

  <ul>

    <?php

      // becomes cumbersome with more complex HTML
      foreach ($candies as $candy) {

          echo "<li>$name likes $candy</li>";

      }

    ?>

  </ul>

  <div>

    <h3> Tasks Summary </h3>

          <strong>Status: </strong> <?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>

          <?php
            // shorthand
            if (! $tasks['completed']) : ?>

              <span class='icon'>&#128308;</span>

          <?php endif; ?>

  </div>

</body

</html>
