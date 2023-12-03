<?php 
    include("../../headers/header.php");
    include_once("../../controller/TodoController.php");
?>

<?php 
    $todos = new TodoController();
    $todo = $todos->edit_todo($_GET['id']);
?>

<style>
    .card{
        margin: 20px 0;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            Update Todo
        </div>
        <div class="card-body">
            <form action="" method="POST">

            </form>
        </div>
    </div>
</div>