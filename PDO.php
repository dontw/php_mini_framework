<?php
    $query = require "./bootstrap.php";
    
    $tasks = $query->selectAll('todos','Task'); 

    echo "ok!";
    
    require 'PDO.view.php';
 ?>