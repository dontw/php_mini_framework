<?php 
//   $router->define([

//         '' => 'controllers/index.php',

//         'about' => 'controllers/about.php',

//         'about/culture' => 'controllers/about-culture.php',

//         'contact' => 'controllers/contact.php',

//         'name' => 'controllers/add-name.php'
        
//     ]);
    $router->get('', 'controllers/index.php');
    $router->get('about', 'controllers/about.php');
    $router->get('about/culture', 'controllers/about-culture.php');
    $router->get('contact', 'controllers/contact.php');
    $router->post('name', 'controllers/add-name.php');
?>