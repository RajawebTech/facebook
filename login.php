<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "facebook");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if($result && mysqli_num_rows($result) > 0){
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid Login";
}
?>