<?php 
//   $router->define([

//         '' => 'controllers/index.php',

//         'about' => 'controllers/about.php',

//         'about/culture' => 'controllers/about-culture.php',

//         'contact' => 'controllers/contact.php',

//         'name' => 'controllers/add-name.php'
        
//     ]);
    $router->get('', 'PagesController@home');
    $router->get('manage', 'PagesController@manage');
    // $router->get('about/culture', 'controllers/about-culture.php');
    $router->get('about', 'PagesController@about');
    $router->get('article_content', 'PagesController@article_content');
    $router->get('article_create', 'PagesController@article_create');
    $router->post('name', 'UsersController@store');
?>