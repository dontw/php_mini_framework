<?php
    namespace App\Controllers;

    use App\Core\App;

    class ArticlesController{

        //Get specific article content
        public function article_content(){

            $idValue = $this->getSingleUriVal($_SERVER['REQUEST_URI'], 'id');

            $articleItems = App::get('database')->selectById('articles',$idValue);
            
            return view('article_content',[
                 "articleItems" => $articleItems
            ]);
        }

        //to article create page
        public function article_create(){
            
            return view('article_create',[]);

        }

        //send created article to db than return to manage page
        public function article_send(){

            App::get('database')->insertItem('articles',[
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'image' => $_POST['image'],
                'content' => $_POST['content']
            ]);

            return redirect('manage');

        }

        //get the article content that you want to update
        public function article_change(){
            $idValue = $this->getSingleUriVal($_SERVER['REQUEST_URI'], 'id');

            $articleItems = App::get('database')->selectById('articles',$idValue);
        
            return view('article_change',[
                "articleItems" => $articleItems
            ]);
        }

        //send update to db
        public function article_update(){

            App::get('database')->updateById('articles',[
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'image' => $_POST['image'],
                'content' => $_POST['content']
            ],$_POST['id']);

            return redirect('manage');
        }

        //delete specific article by ID
        public function  article_delete(){

            $idValue = $this->getSingleUriVal($_SERVER['REQUEST_URI'], 'id');
            App::get('database')->deleteItem('articles',$idValue);
            return redirect('manage');

        }

        public function getSingleUriVal($uri,$queryName){
            $parts = parse_url($uri);
            parse_str($parts['query'], $query);
            return $query[$queryName];
        }                

    }
?>