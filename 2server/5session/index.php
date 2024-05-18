<?php
session_start();
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: php/welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login System</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <h2>Login</h2>
      <form action="php/login.php" method="post">
        <label for="username">Username:</label>
        <input class="inp" type="text" id="username" name="username" required />
        <label for="password">Password:</label>
        <input class="inp" type="password" id="password" name="password" required />
        <button type="submit">Login</button>
      </form>
    </div>
  </body>
</html>
