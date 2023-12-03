<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<style>
    .list-group{
        margin: 30px 0;
    }

</style>

<div class="container">

    <hr>
    <div class="list-group">
    <?php 
        $todos = new TodoController();
        $all_todos = $todos->view_todos();

        foreach ($all_todos as $todo){
        ?>
        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?= $todo['topic']; ?></h5>
            <small><?= $todo['add_date']; ?></small>
        </div>
        <p class="mb-1"><?= $todo['todo']; ?></p>
        </a>
        
        
        <?php
        }
    ?>
    </div>
</div>