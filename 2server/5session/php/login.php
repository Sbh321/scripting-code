<?php
session_start();
$valid_username = "user";
$valid_password = "password";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        }
        header("Location: welcome.php");
    } else {
        echo "Invalid username or password";
    }
} else {
    header("Location: ../index.php");
}
?>
