<?php
    require "database/Connection.php";
    require "database/QueryBuilder.php";

    
    function fetchAllTasks($pdo){
        $statement = $pdo->prepare('select * from todos');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }

    $pdo = Connection::make();
    $query = new QueryBuilder($pdo);
    $tasks = $query->selectAll('todos');
    

    // varExportColor($tasks[0]->description);
    
    require 'PDO.view.php';
 ?>