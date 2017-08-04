<?php 
    //pages
    $router->get('', 'PagesController@home');
    $router->get('manage', 'PagesController@manage');
    $router->get('about', 'PagesController@about');

    //articles
    $router->get('article_content', 'ArticlesController@article_content');
    $router->get('article_create', 'ArticlesController@article_create');
    $router->get('article_change', 'ArticlesController@article_change');
    $router->get('article_delete', 'ArticlesController@article_delete');
    $router->post('article_send','ArticlesController@article_send');
    $router->post('article_update','ArticlesController@article_update');
?>