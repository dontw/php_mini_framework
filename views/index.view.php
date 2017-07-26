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
<?php require('partials/footer.php') ?>