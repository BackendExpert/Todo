<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>



<div class="container">

    <hr>
    <ol class="list-group list-group">
    <?php 
        $todos = new TodoController();
        $all_todos = $todos->view_todos();

        foreach ($all_todos as $todo){
        ?>

        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?= $todo['topic']; ?></div>
            <?= $todo['todo']; ?>
            </div>
            <a href=""><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>Edit</button></a> &nbsp;
            <a href=""><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button></a>
            &nbsp;<span class="badge bg-primary rounded-pill"><?= $todo['add_date']; ?></span>
        </li>
              
        
        <?php
        }
    ?>
    </ol>  
</div>