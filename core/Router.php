<?php
    class Router{

        public $routes = [
            'GET' => [],
            'POST' => []
        ];

        public static function load($file){
            // $router = new Router;
            // $router = new self;
            $router = new static;

            //define the routes from routes.php
            require $file;
            //return the whole Router instance
            return $router;
        }

        
        // public function define($routes){

        //     $this->routes = $routes;
        // }

        public function get($uri, $controller){
            $this->routes['GET'][$uri] = $controller;
        }

        public function post($uri, $controller){
            $this->routes['POST'][$uri] = $controller;
        }

        public function direct($uri,$RequestType){

            if(array_key_exists($uri, $this->routes[$RequestType])){

                return $this->routes[$RequestType][$uri];

            }

            throw new Exception('No route defined for ths URI!!!');
        }
    }
?>