<?php
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
  $email = $_POST["email"];
  
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Account created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>