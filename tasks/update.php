<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `tasks` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$description=$row['description'];
$due_date=$row['due_date'];


if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $due_date=$_POST['due_date'];
   

    $sql="update `tasks` set id=$id,title='$title',description='$description',due_date='$due_date'
    where id=$id";
    $result=mysqli_query($con,$sql); 
    if($result){
        // echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Updating?</title>
  </head>
  <h1><center>TASK</center>
    </h1>
    <body style="background-image: linear-gradient(lightblue,white);">
        <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter title" name="title" autocomplete="off"
                value=<?php echo $title;?>>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter description" name="description" autocomplete="off"
                value=<?php echo $description;?>>
            </div>
            <div class="form-group">
                <label>Due date</label>
                <input type="text" class="form-control" placeholder="Enter due date" name="due_date" autocomplete="off"
                value=<?php echo $due_date;?>>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </div>
    </body>
</html>