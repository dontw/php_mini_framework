<?php
    $query = require "./bootstrap.php";
    
    $tasks = $query->selectAll('todos','Task'); 
    
    require 'PDO.view.php';
 ?>