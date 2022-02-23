<?php
include 'header.php';


// session_start(); -->

// if (!isset($_SESSION["user_id"])) {
//     header("Location: index.php");
// }

// include 'config.php';

// if (isset($_POST["submit"])) {
//     $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
//     $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
//     $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));

//     if ($password === $cpassword) {
//         $photo_name = $_FILES["photo"]["name"];
//         $photo_tmp_name = $_FILES["photo"]["tmp_name"];
//         $photo_size = $_FILES["photo"]["size"];
//         $photo_new_name = rand() . $photo_name;

//         if ($photo_size > 5242880) {
//             echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
//         } else {
//             $sql = "UPDATE users SET full_name='$full_name', password='$password', photo='$photo_new_name' WHERE id='{$_SESSION["user_id"]}'";
//             $result = mysqli_query($conn, $sql);
//             if ($result) {
//                 echo "<script>alert('Profile Updated successfully.');</script>";
//                 move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
//             } else {
//                 echo "<script>alert('Profile can not Updated.');</script>";
//                 echo  $conn->error;
//             }
//         }
//     } else {
//         echo "<script>alert('Password not matched. Please try again.');</script>";
//     }
// }

// ?>


<head>
</head>
<style>
body {
    margin: 0;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  </style>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">Yuki Hayashi</h5>
				<h6 class="user-email">yuki@Maxwell.com</h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
          <br>
					<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Username</label>
          <br>
					<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Password</label>
          <br>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
					<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>       