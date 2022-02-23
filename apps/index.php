<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $Username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));

  $check_Username = mysqli_num_rows(mysqli_query($conn, "SELECT Username FROM users WHERE Username ='$Username'"));

 
  if ($check_Username > 0) {
    echo "<script>alert('Username already exists in our database.');</script>";
  } else {
    $sql = "INSERT INTO users (full_name,Username,password) VALUES ('$full_name','$Username','$password')";
 $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["signup_full_name"] = "";
      $_POST["Username"] = "";
      $_POST["signup_password"] = "";
      echo "success";

    }

   }
}
if (isset($_POST["signin"])) {
  $Username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_Username = mysqli_query($conn, "SELECT id FROM users WHERE Username='$Username'AND password='$password'");

  if (mysqli_num_rows($check_Username) > 0) {
    $row = mysqli_fetch_assoc($check_Username);
    $_SESSION["user_id"] = $row['id'];
    header("Location: welcome.php");
  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";
  }
}
