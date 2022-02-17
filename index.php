<?php
    require_once(“db_connect.php”);
        if(isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
    //connect to database
        db();
        global $link;
        $query = "INSERT INTO todoitems (title , description)     
                VALUES ('$title', '$description')";
        $insertTodo = mysqli_query($link, $query);
        if($insertTodoitems){
            echo “successfully”;
        }
        else{
            echo mysqli_error($link);
        }
            mysqli_close($link);
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" typ="text/css" href="main.css">
    <title>To Do List</title>
</head>
<body>
    <div class="heading">
        <h2>To Do List</h2>
    </div>

    <form method="POST" action="index.php">
        <input type="text" name="Title" placeholder="Title" class="task_input">
        <input type="text" name="Description" placeholder="Description" class="task_input">
        <button type="submit" class="task_btn" name="submit">Add Item</button>
    </form>

    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
    </table>
</body>
</html>


<?php
    if(isset($_POST['submit'])) {
    $title = $_POST['Title'];
    $description = $_POST['Description'];
    echo "Task was added";}
?>
