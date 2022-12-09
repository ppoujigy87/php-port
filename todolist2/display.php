<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body style="background-image: linear-gradient(lightblue,white);">
<center><h1 style="font-size: 100px;"><u>USERS</u></h1></center>

<div class="container">
    <button class="btn btn-primary my-5 btn-success btn-lg"><a href="index.php" class="text-light" > Add new user </a> </button>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
      <th scope="col">To list</th>
    </tr>
  </thead>
  <tbody>

  <?php
   $sql="select * from `users`";
   $result=mysqli_query($con,$sql);
   if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['Id'];
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>
    <button class="btn btn-primary my-5" ><a href="up.php?
    updateid='.$id.'
    " class="text-light"> Update</a></button>


    <button class="btn btn-danger my-5"><a href="delete.php?
    deleteid='.$id.'
    " class="text-light"> Delete</a></button>
  </td>
  <td>
    <button class="btn btn-primary my-5 btn-success " ><a href="/../tasks/display.php
    " class="text-light"> To list </a></button>
    </td>
 
          </tr>';
        }

   }
   
  ?>
  

  </tbody>
</table>



    
</body>
</html>