<?php
    $app['database']->insertItem('names',[
        'name' => $_POST['name']
    ]);
    $names = $app['database']->selectAll('names');
    require 'views/name-result.view.php';
 ?>