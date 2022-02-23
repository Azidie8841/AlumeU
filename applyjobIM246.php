<?php
include 'header.php'

?>

<?php
 include 'config.php';
if (isset($_POST['Submit'])){
 $Title=$_POST["Title"];
 $Date=$_POST["Date"];
 $Name=$_POST["Name"];
 $Salary=$_POST["Salary"];
 $Qualify=$_POST["Qualify"];
 $skill=$_POST["skill"];
 $Description=$_POST["Description"];
 

$cek_kode=mysqli_query($conn,"select * from JobIM246 where JobTitle='$Title'");

 $cek=mysqli_num_rows($cek_kode);
if($cek>0){
echo "Your Job Title has already registered please use another Job Title";
}
else{
   $sql="INSERT INTO JobIM246 (JobTitle,Date,NameOfCompany,Salary,Qualify,skill,Description) VALUES ( '$Title',' $Date','$Name','$Salary','$Qualify','$skill', '$Description')";
   if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Submit Succesfully!');</script>";
    echo"<Script>window.location.replace('IM246Job.php');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
  
  $conn->close();

	}
 

?>
<head>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 650px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.education-details .input-box input{
  height: 200px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
.education-details .input-box input:focus,
.education-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
}
 form .year-details .year-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: block;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three,
 #dot-4:checked ~ .category label .four,
 #dot-5:checked ~ .category label .five,
 #dot-6:checked ~ .category label .six,
 #dot-7:checked ~ .category label .seven,
 #dot-8:checked ~ .category label .eight,
 #dot-9:checked ~ .category label .nine,
 #dot-10:checked ~ .category label .ten,
 #dot-11:checked ~ .category label .eleven,
 #dot-12:checked ~ .category label .twelve,
 #dot-13:checked ~ .category label .Thirteen,
 #dot-14:checked ~ .category label .fourteen,
 #dot-15:checked ~ .category label .fifteen
 {
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>
<body>
  <div class="container">
    <b><div class="title">Company Information</div></b>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
           <span class="details"> <b>Job Title</b></span>
            <input type="Text" placeholder="Enter Job Title" name="Title" required>
          </div>
          <div class="input-box">
            <span class="details"><b>Date of Advertisement</b></span>
            <input type="Date" placeholder="Enter Date" name="Date" required>
          </div>
          <div class="input-box">
            <span class="details">Name Of Company</span>
            <input type="text" placeholder="Enter name Company" name="Name" required>
          </div>
          <div class="input-box">
            <span class="details">Salary Offer (RM)</span>
            <input type="text" placeholder="Enter Salary" name="Salary" required>
          </div>
        </div>
        <br>
        <b><div class="title">Job Details</div></b>
        <br> 
        <div class="education-details">
        <div class="input-box">
            <span class="details">Qualifications/Experience requirements</span>
            <input type="text" placeholder="Enter Qualification" name="Qualify">
          </div>
        </div>
        <br>
        <div class="education-details">
        <div class="input-box">
            <span class="details">Skills requirements </span>
            <input type="text" placeholder="Enter skill" name="skill">
          </div>
        </div>
        <br>
        <div class="education-details">
        <div class="input-box">
            <span class="details">Job Description/Responsibilities</span>
            <input type="text" placeholder="Enter Job Description" name="Description">
          </div>
        </div>
        <br>
        <div class="button">
          <input type="submit" name="Submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
<?php
include 'footer.php';
?>       