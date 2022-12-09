<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `tasks` where id=$id";
    $results=mysqli_query($con,$sql);
    if($results){
        // echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>