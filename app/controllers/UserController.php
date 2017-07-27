<?php 
    namespace App\Controllers;
    class UsersController{

        public function store(){

            $add_name = $_POST['name'];

            App::get('database')->insertItem('names',[
                'name' => $_POST['name']
            ]);
            $names = App::get('database')->selectAll('names');

             return view('name-result',[
                 "add_name" => $add_name,
                 "names" => $names
             ]);

        }
    }
?>