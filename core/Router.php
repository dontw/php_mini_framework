<?php
    namespace App\Core;
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

        public function put($uri, $controller){
            $this->routes['PUT'][$uri] = $controller;
        }

        public function delete($uri, $controller){
            $this->routes['DELETE'][$uri] = $controller;
        }

        public function direct($uri,$RequestType){

            if(array_key_exists($uri, $this->routes[$RequestType])){

                // return $this->routes[$RequestType][$uri];

                

                return $this->callAction(
                    ...explode('@',$this->routes[$RequestType][$uri])
                );

            }
            //global class add "\"
            
            // throw new \Exception('No route defined for ths URI!!!');

            return view('404',[]);
        }

        protected function callAction($controller,$action){

            $controller = "App\\Controllers\\{$controller}";

           

            $controller = new $controller;

        
            
            
            if(!method_exists($controller, $action)){
                throw new \Exception(
                    "{$controller} does not respond to the {$action} action."
                );
            }
            return $controller->$action();
        }
    }
?>