<?php
include 'dbconnect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql="UPDATE user SET username='$username', password='$password'";
if($conn->query($sql)){
    echo "<script>alert('updated successfully')</script>";
}
else
{
    echo "<script>alert('failed')</script>";
}
?>
