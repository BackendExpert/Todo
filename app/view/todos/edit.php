<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<?php 
    $todos = new TodoController();
    $todo = $todos->edit_todo($_GET['id']);

    // echo $_GET['id'];
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
        <div class="card-header">
            Update Todo
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <label for="Topic">Topic : </label>
                <input type="text" name="update_topic" value="<?= $todo['topic']?>" id="" class="form-control">
                <br>
                <label for="todo">Todo : </label>

            
            </form>
        </div>
    </div>
</div>