<?php
    class Post{
        public $title;

        public $published;

        public function __construct($title, $published){
            $this->title = $title;
            $this->published = $published;
        }
    }

    $posts = [
        new Post('My First Post', true),
        new Post('My Second Post', true),
        new Post('My Third Post', true),
        new Post('My Fourth Post', false),
    ];

   
    // $unpublishedPosts = array_filter($posts, function($post){
    //     $post->published = false;
    //     return $post;
    // });


   //!!!!!! use map when need modified return
    // $modified = array_map(function($post){
    //     $post->published = true;
    //     return $post;
    // },$posts);

    // foreach($posts as $post){
    //     $post->published = true;
    // }

    // var_dump($posts);

    //get all the title from posts

    //method 1
    $titles = array_map(function($post){
        return $post->title;
    },$posts);

    // var_dump($titles);

    //method2 <-- better!
    $titles2 = array_column($posts, 'published', 'title');
    var_dump($titles2);

?>