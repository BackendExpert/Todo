<?php 
    include_once("../../model/TodoModel.php");

    class TodoController extends TodoModel {
        public function view_todos(){
            return $this->all_todos();
        }

        public function add_todo(){
            return $this->todo_add($todo, $todo_data);
        }

        public function edit_todo($id){
            return $this->todo_edit($id);
        }
    }
?>