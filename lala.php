<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $numberphone = mysqli_real_escape_string($conn, $_POST["numberphone"]);
  $Username = mysqli_real_escape_string($conn, $_POST["Username"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));

  $check_Username = mysqli_num_rows(mysqli_query($conn, "SELECT Username FROM users WHERE Username ='$Username'"));

 
  if ($check_Username > 0) {
    echo "<script>alert('Username already exists in our database.');</script>";
  } else {
    $sql = "INSERT INTO users (full_name,numberphone,Username, password, status) VALUES ('$full_name', '$numberphone','$Username', '$password', '0')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["signup_full_name"] = "";
      $_POST["numberphone"] = "";
      $_POST["Username"] = "";
      $_POST["signup_password"] = "";
      header("Location:home.php");

    }

   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form - Pure Coding</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="Username" placeholder="Username" name="Username" value="<?php echo $_POST['Username']; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
          </div>
          <input type="submit" value="Login" name="signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-call"></i>
            <input type="text" placeholder="numberphone" name="numberphone" value="<?php echo $_POST["numberphone"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="	far fa-id-badge"></i>
            <input type="Username" placeholder="Username" name="Username" value="<?php echo $_POST["Username"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>