<?php
include 'header.php'

?>

<?php
include 'config.php';
if (isset($_POST['Register'])){
$IDNumber=$_POST["IDNumber"];
$FullName=$_POST["FullName"];
$Number=["Number_Phone"]
$Email=$_POST["Email"];
$linkedin=$_POST["linkedin"];
$Branch=$_POST["Branch"];
$Year=$_POST["Year"];
$highestedulevel=$_POST["highestedulevel"];
$othertechskill=$_POST["othertechskill"];
$Currectcomp=$_POST["Currectcomp"];
$Currectpos=$_POST["Currectpos"];
$SalaryRange=$_POST["SalaryRange"];

$cek_kode=mysqli_query($connect,"select * from IM244 where IDNumber='$IDNumber'");

$cek=mysqli_num_rows($cek_kode);
if($cek>0){
	echo "You has been registered";
	}
else{
    $input=mysqli_query($connect,"insert into IM244 (IDNumber,FullName,Email,Phone_Number,linkedin,Branch,Year,highestedulevel,othertechskill,Currectcomp,Currectpos,SalaryRange) values ('$IDNumber','$FullName','$Number','$Email','$linkedin','$Branch','$Year','$highestedulevel','$othertechskill','$Currectcomp','$Currectpos','$SalaryRange')");
	if($input){
		echo"You has become one of UITM Alumni Community";
		}
	}
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
   display: flex;
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
 #dot-11:checked ~ .category label .eleven
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
    <b><div class="title">Personal Information</div></b>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
           <span class="details"> <b>ID Number</b></span>
            <input type="Text" placeholder="Enter your ID Number" name="IDNumber" required>
          </div>
          <div class="input-box">
            <span class="details"><b>Fullname</b></span>
            <input type="Name" placeholder="Enter your Fullname" name="Fullname" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="Email" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="integer" placeholder="Enter your number" name="Phone_Number">
          </div>
          <div class="input-box">
            <span class="details">Linked account link</span>
            <input type="text" placeholder="Enter your linkedin link" name="Linked_account" >
          </div>
        </div>
        <br>
        <b><div class="title">Course Information</div></b>
        <br> 
        <div class="gender-details">
          <input type="radio" name="branch" id="dot-1">
          <input type="radio" name="branch" id="dot-2">
          <span class="gender-title">UITM Branch</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender"><b>Puncak Perdana Branch</b></span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender"><b>Machang Branch</b></span>
          </label>
          </div>
        </div>
        <div class="user-details">
        <div class="input-box">
            <span class="details">Bachelor Degree's Graduated Year</span>
            <input type="text" placeholder="Enter Graduated Year" name="Year">
          </div>
        </div>
        <div class="education-details">
        <div class="input-box">
            <span class="details">Other Technical Qualification (Optional)</span>
            <input type="text" placeholder="Enter other Technical Qualification" name="othertechskill">
          </div>
        </div>
        <br>
        <div class="gender-details">
          <input type="radio" name="education" id="dot-4">
          <input type="radio" name="education" id="dot-5">
          <input type="radio" name="education" id="dot-6">
          <input type="radio" name="education" id="dot-7">
          <span class="gender-title">Highest education level</span>
          <div class="category">
            <label for="dot-4">
            <span class="dot four"></span>
            <span class="gender"><b>Bachelor Degree</b></span>
          </label>
          <label for="dot-5">
            <span class="dot five"></span>
            <span class="gender"><b>Master</b></span>
          </label>
          <label for="dot-6">
            <span class="dot six"></span>
            <span class="gender"><b>Doctorate</b></span>
          </label>
          </div>
        </div>
        <br>
        <b><div class="title">Occupation Information</div></b>
        <div class="user-details">
        <div class="input-box">
            <span class="details">Current Company</span>
            <input type="text" placeholder="Enter Your Current Company" name="Currectcomp">
        </div>
        <div class="input-box">
            <span class="details">Current Position</span>
            <input type="text" placeholder="Enter Your Current Position" name="Currectpos" >
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="Salary" id="dot-8">
          <input type="radio" name="Salary" id="dot-9">
          <input type="radio" name="Salary" id="dot-10">
          <input type="radio" name="Salary" id="dot-11">
          <span class="gender-title">Salary range (RM)</span>
          <div class="category">
            <label for="dot-8">
            <span class="dot eight"></span>
            <span class="gender"><b>RM2000-RM2499</b></span>
          </label>
          <label for="dot-9">
            <span class="dot nine"></span>
            <span class="gender"><b>RM2500-RM2999</b></span>
          </label>
          <label for="dot-10">
            <span class="dot ten"></span>
            <span class="gender"><b>RM3000-RM3999</b></span>
          </label>
          <label for="dot-11">
            <span class="dot eleven"></span>
            <span class="gender"><b>RM3999 and upper</b></span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="Register" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
<?php
include 'footer.php';
?>       