<?php
session_start();
$host = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) == 1) {
    $_SESSION["username"] = $username;
    header("Location: welcome.php");
  } else {
    echo "Invalid username or password.";
  }
}

mysqli_close($conn);
?>