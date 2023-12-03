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
    .bck-btn{
        margin: 30px 0;
    }
</style>

<div class="container">
    <a href="index.php"><button class="btn btn-primary bck-btn">Back</button></a>
    <div class="card">
        <div class="card-header">
            Update Todo
        </div>
        <div class="card-body">

            <?php 
                if(isset($_POST['todo_update'])){
                    $id = $_GET['id'];
                    $topic = $_POST['update_topic'];
                    $todo = $_POST['update_todo'];

                    $update_todo = new TodoController();
                    $update_todo->update_todo($id, $topic, $todo);

                }
            
            ?>

            <form action="" method="POST">
                <label for="Topic">Topic : </label>
                <input type="text" name="update_topic" value="<?= $todo['topic']?>" id="" class="form-control">
                <br>
                <label for="todo">Todo : </label>
                <textarea name="update_todo" class="form-control areatext"><?= $todo['todo']; ?></textarea>
                <br>
                <input type="submit" value="Update Todo" name="todo_update" class="btn btn-success">

            </form>
        </div>
    </div>
</div>