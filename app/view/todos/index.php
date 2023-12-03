<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<div class="container">
    <?php 
        $todos = new TodoController();
        $all_todos = $this->view_todos();

        foreach ($all_todos as $todo){
            echo $todo['topic'];
        }
    ?>
</div>