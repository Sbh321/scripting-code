<?php
include 'dbconnect.php';
$id=$_GET['id'];
$sql=" DELETE FROM user WHERE id='$id'";
if($conn->query($sql))
{
    echo "<script>alert('deleted successfully')";
}
else{
    echo "<script>alert('failed')";
}
?>
