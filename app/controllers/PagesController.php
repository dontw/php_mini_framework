<?php 
    namespace App\Controllers;

    use App\Core\App;
    
    class PagesController{

        public function home(){
            //Receive the request

            //Delegate
            $articles = App::get('database')->selectAll('articles');
            //Return a response

            // die(var_dump($articles));
            
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

        public function article_content(){

            $idValue = $this->getSingleUriVal($_SERVER['REQUEST_URI'], 'id');

            $articleItems = App::get('database')->selectById('articles',$idValue);
            
             return view('article_content',[
                 "articleItems" => $articleItems
             ]);

        }

        public function article_create(){

    
            
             return view('article_input',[

             ]);

        }

        public function getSingleUriVal($uri,$queryName){
            $parts = parse_url($uri);
            parse_str($parts['query'], $query);
            return $query[$queryName];
        }
    }
?>