<?php 
    $router->get('', 'PagesController@home');
    $router->get('manage', 'PagesController@manage');
    $router->get('about', 'PagesController@about');
    $router->get('article_content', 'PagesController@article_content');
    $router->get('article_create', 'PagesController@article_create');
    $router->get('article_change', 'PagesController@article_change');
    $router->get('article_delete', 'PagesController@article_delete');
    $router->post('article_send','PagesController@article_send');
    $router->post('article_update','PagesController@article_update');
    $router->post('name', 'UsersController@store');
?>