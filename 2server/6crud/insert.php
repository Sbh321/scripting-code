<?php
include 'dbconnect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO user VALUES('','$username','$password')";
if($conn->query($sql)==TRUE)
      {
        echo "<script>alert('Registered')</script>";
              }else{
        echo 'ERROR';
      }
?>
