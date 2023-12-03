<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<div class="container">
    <div class="list-group">
    <?php 
        $todos = new TodoController();
        $all_todos = $todos->view_todos();

        foreach ($all_todos as $todo){
        ?>
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?= $todo['topic']; ?></h5>
            <small><?= $todo['add_date']; ?></small>
        </div>
        <p class="mb-1"><?= $todo['todo']; ?></p>
        
        <?php
        }
    ?>
    </div>
</div>