<?php
    // $app = [];

    // $app['config'] = require 'config.php';

    // require "core/Router.php";
    // require "core/Request.php";
    // require "database/Connection.php";
    // require "database/QueryBuilder.php";

    // $app['database'] = new QueryBuilder(
    //     Connection::make($app['config']['database'])
    // );

    use App\Core\App;

    App::bind('config', require 'config.php');

    App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
    ));

    function view($name, $data){

        extract($data);
        //['name'=>'doge','sound'=>'wow']
        //$name = 'doge';
        //$sound = 'wow';

        return require "app/views/{$name}.view.php";
    }

    function redirect($path){

        header("Location: /{$path}");

    }
?>