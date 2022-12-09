
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $due_date=$_POST['due_date'];
    $completed=$_POST['completed'];

    $sql="insert into `tasks` (title,description,due_date,completed)
    values('$title','$description','$due_date','$completed')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
  <h1><center>NEW TASK</center>
    </h1>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>to do list</title>
  </head>
    <body style="background-image: linear-gradient(lightblue,white);">
        <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control" placeholder=" title" name="title" autocomplete="off">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" class="form-control" placeholder=" description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Due date</label>
                <input type="text" class="form-control" placeholder="year-month-day" name="due_date" autocomplete="off">
                <small>add the dashes and write in number form</small>
            </div>
                

            <button type="submit" class="btn btn-primary" name="submit">Add</button>
        </form>
        </div>
    </body>
</html>