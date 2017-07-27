<?php require('partials/head.php') ?>
<div class="ui container">
  <h2 class="ui header">
    <i class="settings icon"></i>
    <div class="content">
      廢文管理系統
      <div class="sub header">專收廢文</div>
    </div>
  </h2>
  <div class="ui hidden divider"></div>

  <div class="ui four column doubling stackable grid container">
    <div class="column">
      <div class="ui card">
        <div class="content">
          <div class="header">Cute Dog</div>
            <div class="meta">
              <span>2 days ago</span>
              <a>Animals</a>
            </div>
            <p>doge</p>
          </div>
      </div>
    </div>

     <div class="column">
      <div class="ui card">
        <div class="content">
          <div class="header">Cute Dog</div>
            <div class="meta">
              <span>2 days ago</span>
              <a>Animals</a>
            </div>
            <p>doge</p>
          </div>
      </div>
    </div>

     <div class="column">
      <div class="ui card">
        <div class="content">
          <div class="header">Cute Dog</div>
            <div class="meta">
              <span>2 days ago</span>
              <a>Animals</a>
            </div>
            <p>doge</p>
          </div>
      </div>
    </div>

     <div class="column">
      <div class="ui card">
        <div class="content">
          <div class="header">Cute Dog</div>
            <div class="meta">
              <span>2 days ago</span>
              <a>Animals</a>
            </div>
            <p>doge</p>
          </div>
      </div>
    </div>
  </div>
  
   <!-- <?php foreach ($tasks as $task) : ?>
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
  </form> -->
</div>

  

<?php require('partials/footer.php') ?>