<?php 
//   $router->define([

//         '' => 'controllers/index.php',

//         'about' => 'controllers/about.php',

//         'about/culture' => 'controllers/about-culture.php',

//         'contact' => 'controllers/contact.php',

//         'name' => 'controllers/add-name.php'
        
//     ]);
    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    // $router->get('about/culture', 'controllers/about-culture.php');
    $router->get('contact', 'PagesController@contact');
    $router->post('name', 'UsersController@store');
?>