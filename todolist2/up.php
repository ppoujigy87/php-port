<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `users` where Id=$id";
   $result=mysqli_query($con,$sql);
   ($row=mysqli_fetch_assoc($result));
            $id=$row['Id'];
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
        
        
    
        



if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['pass'];

$sql="update `users` set Id='$id',name='$name',email='$email',password='$password'
where Id=$id";
$result=mysqli_query($con,$sql);
if($result){
 // echo "data insert succesful";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Updating?</title>
  </head>
  <body style="background-image: linear-gradient(lightblue,white);">
    <h1><center>USER</center>
    </h1>
    <div class="container">
    <form method="POST">
    <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Name" name="name" value=<?php
     echo $name;?>>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"  value=<?php
     echo $email;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value=<?php
     echo $password;?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>





   </body>
</html>