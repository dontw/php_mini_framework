<?php 
    namespace App\Controllers;

    use App\Core\App;
    
    class PagesController{

        public function home(){
            //Receive the request

            //Delegate

            //Return a response
            $tasks = App::get('database')->selectAll('todos');
            return view('index',[
                'tasks' => $tasks
            ]);
        }

        public function about(){

            $comName = "doge Empire";

             return view('about',[
                 'comName' => $comName
             ]);

        }



        public function contact(){

             return view('contact',[]);

        }
    }
?>