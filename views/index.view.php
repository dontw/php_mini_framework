<?php require('partials/head.php') ?>
  

  <h1>This is index</h1>
   <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if($task->completed) : ?>
        <strike><?= $task->description ?></strike>
      <?php else: ?>
        <?= $task->description ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?> 
  <?php echo "view ok!" ?>

  <h1>Submit Your Name</h1>
  <form method="POST" action="/name">
    <input type="text" name="name">
    <button type="submit">submit</button>
  </form>

<?php require('partials/footer.php') ?>