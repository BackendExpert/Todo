<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<style>
    .card{
        margin: 20px 0; 
    }
    .areatext{
        resize: none;
        width: 100%;
        height: 110px;
    }
</style>


<div class="container">

    <div class="card">
        <div class="card-header">Add Todo</div>
        <div class="card-body">
            <?php 
                if(isset($_POST['add_todo'])){
                    $topic = $_POST['topic'];
                    $todo_data = $_POST['todo'];
                    
                    $add_todo = new TodoController();
                    $add_todo->add_todo($topic, $todo_data);
                }
            ?>

            <form action="" method="POST">
                <label for="topic">Topic : </label>
                <input type="text" name="topic" id="" class="form-control"><br>

                <label for="todo">Todo : </label>
                <textarea name="todo" id="" class="form-control areatext"></textarea><br>

                <input type="submit" value="Add Todo" name="add_todo" class="btn btn-success">
            </form>
        </div>
    </div>

    <hr>

    <h2 class="text-center">All Todos</h2>
        
    <?php 
        if(isset($_POST['delete_todo'])){
            $id = $_POST['delete_id'];

            $delete_todo = new TodoController();
            $delete_todo->delete_todo($id);
        }
    ?>

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
            <a href="edit.php?id=<?= $todo['id']; ?>"><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button></a> &nbsp;
            <form action="" method="POST"><input type="hidden" name="delete_id" value="<?= $todo['id']; ?>"><button type="submit" name="delete_todo" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete </button></form>
            &nbsp;<span class="badge bg-primary rounded-pill"><?= $todo['add_date']; ?></span>
        </li>
              
        
        <?php
        }
    ?>
    </ol>  
</div>