<?php
    //composer autoload must require this!!!
    require 'vendor/autoload.php';

    //setting config and db
    require 'core/bootstrap.php';

    //get helper functions
    require 'core/helper.php';

    use App\Core\{Router, Request};

    Router::load('app/routes.php') -> direct(Request::uri(), Request::method());
    //save "app/routes.php  
 ?>