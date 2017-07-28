<?php 
    class Connection{
        public static function make($config){
            try{
                return  new PDO(
                    $config['connection'].";dbname=".$config['name'].";charset=utf8",
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            }catch(PDOException $e){
                echo "error!";
                die($e->getMessage());
            }
        }
    }
?>