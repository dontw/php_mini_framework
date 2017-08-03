<?php 
   

    class QueryBuilder{
        protected $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function selectAll($table){
            $statement = $this->pdo->prepare("SELECT * FROM ${table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS);
        }

        public function selectById($table,$idNum){
            $statement = $this->pdo->prepare("SELECT * FROM ${table} WHERE id = ${idNum}");
            $statement->execute();
            return $statement->fetch();
        }

        public function updateById($table,$parameters, $idNum){

            $setArr = [];

            foreach($parameters as $key => $value){
                array_push($setArr,"{$key}=:{$key}");
            }

            $sql = sprintf(
                'UPDATE %s SET %s WHERE id = %s',
                $table,
                implode(', ', $setArr),
                $idNum
            );

            try{
                $statement = $this->pdo->prepare($sql);
                $statement->execute($parameters);

            } catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function insertItem($table,$parameters){
           
            $sql = sprintf(
                'INSERT INTO %s (%s) VALUES(%s)',
                $table,
                implode(', ', array_keys($parameters)),
                ':'.implode(', :', array_keys($parameters))
            );
            
            try{
                $statement = $this->pdo->prepare($sql);
                //bind value!
                // $statement->bindParam(':name', 'Joe');
                $statement->execute($parameters);
            } catch(Exception $e){
                var_dump($parameters);
                var_dump($sql);
                die($e->getMessage());
            }
            
        }

        public function deleteItem($table, $idNum){
            $statement = $this->pdo->prepare("DELETE FROM ${table} WHERE id = ${idNum}");
            try{
                $statement->execute($parameters);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        
    } 

?>
    
