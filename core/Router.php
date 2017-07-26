<?php
    class Router{

        protected $routes = [];

        public static function load($file){
            // $router = new Router;
            // $router = new self;
            $router = new static;

            //define the routes from routes.php
            require $file;
            //return the whole Router instance
            return $router;
        }

        
        public function define($routes){

            $this->routes = $routes;
        }

        public function direct($uri){

            if(array_key_exists($uri, $this->routes)){

                return $this->routes[$uri];

            }

            throw new Exception('No route defined for ths URI!!!');
        }
    }
?>