<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>to do list</title>
</head>

<center>
<body style="background-image: linear-gradient(lightblue,white);">
  <button type="button" class="btn btn-dark btn-block btn-lg">TO DO LIST</button>
  <hr>
    <div class="container">
    <button class="btn btn-dark btn-lg my-5" style="float: left;">
            <a href="/../todolist2/display.php" class="text-light">Back</a>
        </button>

        <button class="btn btn-primary btn-lg btn-block my-5">
            <a href="user.php" class="text-light">Add Task</a>
        </button>
        
        <table class="table">
        <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Due date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php


    $sql="Select * from `tasks`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $title=$row['title'];
            $description=$row['description'];
            $due_date=$row['due_date'];
            
            echo 
            '
            <tr>
                <th scope="row">' .$id. '</th>
                <td>'.$title.'</td>
                <td>'.$description.'</td>
                <td>'.$due_date.'</td>
                
                <td>
                <button class="btn btn-success"><a href="delete.php?deleteid='.$id.'" class="text-light">Done</a></button>
                <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                </td>
            </tr>
            ';
        }
    }
    ?>
  </tbody>
</table>
    </div>
    </center>
    
</body>
</html>