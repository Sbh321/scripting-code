<?php
include 'dbconnect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
} else {
    echo "No user found with ID: $id";
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Update user</h2>
    <form action="updatephp.php" method="post">
        <label for="username">username</label>
        <input type="text" id="username" value="<?php echo $row['username'] ?>" placeholder="enter the username" name="username">
        <br>
        <label for="password">password</label>
        <input type="password" id="password" value="<?php echo $row['password'] ?>" placeholder="enter the password" name="password">
        <br>
        <button>submit</button>
    </form>
</body>
</html>
