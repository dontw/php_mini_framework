<?php 
    namespace App\Controllers;

    use App\Core\App;
    use App\Core\Helper;
    
    class PagesController{

        public function home(){
            //Receive the request

            //Delegate
            $articles = App::get('database')->selectAll('articles');
            
            //Return a response
            return view('index',[
                'articles' => $articles
            ]);
        }

        public function manage(){

            $articles = App::get('database')->selectAll('articles');

             return view('manage',[
                 'articles' => $articles
             ]);

        }

        public function about(){

             return view('about',[]);

        }

    }
?>