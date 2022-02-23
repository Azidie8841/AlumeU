<?php
include 'config.php';
?>
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/uploads/logo.png">
  <link rel="icon" type="image/png" href="assets/uplods/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AlumeUITM
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<style>

  .sidebar .logo .simple-text {
    text-transform: uppercase;
    padding: 1px 0px;
    display: inline-block;
    font-size: 18px;
    color: #3C4858;
    white-space: nowrap;
    font-weight: 400;
    line-height: 30px;
    overflow: hidden;
    text-align: center;
    display: block;
  }
  .sidebar .logo {
    padding: 1px 0px;
    margin: 0;
    display: block;
    position: relative;
    z-index: 4;
}
.button {
    background-color: #082550; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
  }
  
  .button1 {border-radius: 2px;}
  .button2 {border-radius: 4px;}
  .button3 {border-radius: 8px;}
  .button4 {border-radius: 12px;}
  .button5 {border-radius: 50%;}
  </style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
    <img class="ml-2 mb-0 mt-0 pt-2" src="../assets/img/logo2.png" height="130px" width="140px">
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="listofreg.php">
          <i class="material-icons">dashboard</i>
          <p>Register as ALUMNI</p>
        </a>
      </li>
      <li class="nav-item.active">
        <a class="nav-link" href="listofalumni.php">
          <i class="material-icons">person</i>
          <p>ALUMNI List</p>
        </a>
      </li>
      <li class="nav-item.active">
        <a class="nav-link" href="Alumniuser.php">
          <i class="material-icons">info</i>
          <p>ALUMNI Details</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ApplyJobCourses.php">
          <i class="material-icons">content_paste</i>
          <p>Apply Job</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="listjob.php">
          <i class="material-icons">add</i>
          <p>Job Details And Add</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
          <p>University Information</p>
        </a>
      </li>
     <!-- <a href="buttons.html" class="button button5 ml-5 material-icons">library_books</a> -->
     <!-- <a href="buttons.html" class="button button5 ml-5 material-icons">library_books</a> -->
    <br>
    <centre>
    &nbsp; <a href="buttons.html" class="button button5 ml-5 material-icons">share</a><b></b> 
     <a href="buttons.html" class="button button5 ml-5 material-icons">phone</a><b></b>
     <br><centre> 
     <p style="text-align:center">Made by Azidi V1.0</p>
     <br>
    </ul>
  </div>
</div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle"
                    src="#"> 
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
      