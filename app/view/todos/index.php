<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<div class="container">
    <?php 
        $todos = new TodoController();
        $all_todos = $todos->view_todos();

        foreach ($all_todos as $todo){
        ?>
            
        
        <?php
        }
    ?>
</div>