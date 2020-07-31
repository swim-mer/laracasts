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
    <?php if (! $tasks['completed']) : ?>
      <span class='icon'>&#128308;</span>
    <?php endif; ?>
  </div>
  <div>
    <h4> $colors array </h4>
    <?php var_dump($colors); ?>
  </div>
  <div>
    <h3> Created Tasks Complete Status </h3>
    <ul>
      <?php foreach ($tasks_ as $task_) : ?>
        <li>
          <?php if ($task_->completed) : ?>
            <strike><?= $task_->description; ?></strike>
          <?php else: ?>
            <?= $task_->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <h4>From mytodos database:</h4>
    <ul>
      <?php foreach ($tasks__ as $task__) : ?>
        <li>
          <?php if ($task__->completed) : ?>
            <strike><?= $task__->description; ?></strike>
          <?php else: ?>
            <?= $task__->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <p><?php dd($tasks_); ?></p>
</body
</html>
