<?php 
    include_once("../model/TodoModel.php");
    class TodoController extends TodoModel {
        public function view_todos(){
            return $this->all_todos();
        }
    }
?>