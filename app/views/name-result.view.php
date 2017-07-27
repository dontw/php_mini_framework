<?php require('partials/head.php') ?>
    <h3>Adding Name Result</h3>
    <p>The name you add is: <?= $add_name ?></p>
    <h3>Current Name In DB</h3>
    <?php foreach ($names as $item): ?>
        <li>
            <span>The <?= $item->id ?> name is :</span>
            <span><?= $item->name ?></span>
        </li>
    <?php endforeach; ?>


<?php require('partials/footer.php') ?>