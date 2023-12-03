<?php 

    include("../../config/database.php");

    class TodoModel extends db {
        public function all_todos(){
            $sql = "SELECT * FROM todo_tbl";
            $sql_exc = $this->connect()->prepare($sql);
            $sql_exc->execute();
            $result = $sql_exc->fetchAll();

            return $result;
        }
    }