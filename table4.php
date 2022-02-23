<?php
include 'header.php';
?>
<?php
include 'config.php';
$sql = "SELECT id,IDNumber,fullname,Email,linkedin,Branch,Year,highestedulevel,othertechskill,Currectcomp,Currectpos,SalaryRange,numb FROM IM244";

$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
    .sidebar .sidebar-wrapper .navbar-form .input-group {
    font-size: 1.7em;
    height: 36px;
    width: 78%;
    padding-left: 17px;
    }
    

    </style>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                     
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                             <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Identification Number</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Number Phone </th>
                                            <th>Linkedin address</th>
                                            <th>UITM Branch</th>
                                            <th>Year of Graduation</th>
                                            <th>Highest education level</th>
                                            <th>Other Technical Skill</th>
                                            <th>Current Company</th>
                                            <th>Current Position</th>
                                            <th>Salary Range</th>
                                            <th>action</th>
                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $id = $row['id'];
                                                $IDNumber = $row['IDNumber'];
                                                $fullname= $row['fullname'];
                                                $Email= $row['Email'];
                                                $linkedin= $row['linkedin'];
                                                $Branch= $row['Branch'];
                                                $Year= $row['Year'];
                                                $highestedulevel= $row['highestedulevel'];
                                                $othertechskill= $row['othertechskill'];
                                                $Currectcomp= $row['Currectcomp'];
                                                $Currectpos= $row['Currectpos'];
                                                $SalaryRange= $row['SalaryRange'];
                                                $numb= $row['numb'];

                                                

                                              echo  "<tr>
                                                     <td>$id</td>
                                                    <td>$IDNumber</td>
                                                    <td>$fullname</td>
                                                    <td>$Email</td>
                                                    <td>$numb</td>
                                                    <td>$linkedin</td>
                                                    <td>$Branch</td>
                                                    <td>$Year</td>
                                                    <td>$highestedulevel</td>
                                                    <td>$othertechskill</td>
                                                    <td>$Currectcomp</td>
                                                    <td>$Currectpos</td>
                                                    <td>$SalaryRange</td>
                                                    <td>
                                                    <div class='btn-group'>
                                                    <a href='edituser.php?id='class='btn btn-primary' name:='btn1'><i class='fas fa-pen'></i>Edit</a>
                                                    <a href='delete.php?id=$id'class='btn btn-danger'name:='btn2'> <i class='fas fa-trash-alt'></i>Delete </a>
                                                   </div>
                                                   </td>
                                                    </tr>";
                                             }
                                             echo "</table>";
                                        } else {
                                              echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


<?php
include 'footer.php'
?>