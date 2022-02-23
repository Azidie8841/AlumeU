<?php
include 'header.php';
?>
<?php
include 'config.php';
$sql = "SELECT JobID,JobTitle,Date,NameOfCompany,Salary,Qualify,skill,Description FROM JobIM247";

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
    a.btn.btn-primary{
        width: 79px;
    }
    a.btn.btn-danger{
        width: 79px;
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
                                            <th>Date of advertisement </th>
                                            <th>Job Title</th>
                                            <th>Name of Company </th>
                                            <th>Action</th>
                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $JobID = $row['JobID'];
                                                $JobTitle = $row['JobTitle'];
                                                $Date= $row['Date'];
                                                $NameOfCompany= $row['NameOfCompany'];

                                              echo  "<tr>
                                                    <td>$Date</td>
                                                    <td>$JobTitle</td>
                                                    <td>$NameOfCompany</td>
                                                    <td>
                                                    <div class='btn-toggle btn-group-sm'>
                                                    <a href='viewIM247.php?JobID=$JobID'class='btn btn-primary' name:='btn1'><i class='fas fa-pen'></i>View</a>
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