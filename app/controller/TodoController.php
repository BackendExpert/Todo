<?php 
    include_once("../../model/TodoModel.php");

    class TodoController extends TodoModel {
        public function view_todos(){
            return $this->all_todos();
        }

        public function add_todo($todo, $todo_data){
            return $this->todo_add($todo, $todo_data);
        }
    }
?>