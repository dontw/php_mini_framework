<?php
    //composer autoload must require this!!!
   
    require 'vendor/autoload.php';
    require "core/bootstrap.php";

    // $router = new Router;
    // require 'routes.php';

    //get current uri and cut the first and last  '/' 
    // $uri = trim($_SERVER['REQUEST_URI'], '/');

    //====origin code====
    // $router = Router::load('routes.php');
    // require $router->direct($uri);

    // use App\Core\Router;
    // use App\Core\Request;

    use App\Core\{Router, Request};

    Router::load('app/routes.php') -> direct(Request::uri(), Request::method());
 ?>