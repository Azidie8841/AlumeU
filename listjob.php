<?php 
include 'header.php';?>
<head>

  <img src="assets/uploads/bannerreg.png" alt="Trulli" width="1050px" height="525px"></a>
  <br><br>
  <b><h1>Add Job</h1></b>
</head>
<style>
  .p{
    font-size: 100px;
  }
h1{
  text-align: center;
  font-weight: bold;
  
}
.cards {
    margin: 0 0;
    max-width: 1000px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(225px, 1fr));
    grid-auto-rows: auto;
    gap: 25px;
    font-family: sans-serif;
    padding-top: 30px;
}

.cards * {
    box-sizing: border-box;
}

.card__image {
    width: auto;
    height: 160px;
    object-fit: cover;
    display: block;
    border-top: 2px;
    border-right: 2px; 
    border-left: 2px;
}
.card {
    box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2);
    height: 400px;
}

.card:hover {
  box-shadow: 0 1px 1px 0 rgba(0,0,0,0);
}

.card__content {
    line-height: 1.5;
    font-size: 0.9em;
    padding: 15px;
    background: #fafafa;
    border-right: 2px ;
    border-left: 2px ;
}

.card__content > p:first-of-type {
    margin-top: 0;
}

.card__content > p:last-of-type {
    margin-bottom: 0;
}

.card__info {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #555555;
    font-size: 0.8em;
    border-bottom: 25px ;
    border-right: 2px ;
    border-left: 2px s;
   
}

.card__info1 {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #555555;
    font-size: 0.8em;
    border-bottom: 25px ;
    border-right: 2px ;
    border-left: 2px s;
 
}

.card__info i {
    font-size: 0.9em;
    margin-right: 8px;
    
}

.card__link {
  align-items: center;
    text-decoration: none;
}

.card__link:hover {
    text-decoration: underline;
}
p{
  text-align: center;
  font-size: 14px;
  font-weight: bolder;
}


</style>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="cards">
  <div class="card">
    <img class="card__image" src="assets/uploads/librarylist.png" alt="">
    <div class="card__content">
      <b><p>
      Bachelor of Information Science (Hons) Library Management - IM244
      </p></b>
    </div>
    <div class="card__info">
      <div>
      <a href="IM244Job.php" class="btn btn-primary ml-5">Add Job</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="assets/uploads/systemlist.png" alt="">
    <div class="card__content">
      <b><p>
      Bachelor of Information Science (Hons) Information Systems Management - IM245
      </p></b>
    </div>
    <div class="card__info1">
      <div>
      <a href="IM245Job.php" class="btn btn-primary ml-5">Add Job</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="assets/uploads/recordlist.png" alt="">
    <div class="card__content">
      <b><p>
      Bachelor of Information Science (Hons) Records Management - IM246
      </p></b>
    </div>
    <div class="card__info">
      <div>
      <a href="IM246Job.php" class="btn btn-primary ml-5">Add Job</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="assets/uploads/resourcelist.png" alt="">
    <div class="card__content">
      <b><p>
      Bachelor of Information Science (Hons) Resource Centre Management - IM247
      </p></b>
    </div>
    <div class="card__info">
      <div>
      <a href="IM247Job.php" class="btn btn-primary ml-5">Add Job</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="assets/uploads/contentlist.png" alt="">
    <div class="card__content">
      <b><p>
      Bachelor of Information Science (Hons) Information Content Management - IM249
      </p></b>
    </div>
    <div class="card__info">
      <div>
      <a href="IM249Job.php" class="btn btn-primary ml-5">Add Job</a>
      </div>
    </div>
  </div>
</div>
</body>
 <?php
 include 'footer.php';
?>       