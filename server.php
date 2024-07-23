<?php
session_start();
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'web1');
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
        // Insert the new user into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    mysqli_query($db, $sql);
        
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Welcome, you are registered and logged in";
    header('location: all.php');
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
        header('location:all.php');
    }
}

?>