<?php
include 'config.php';
$sql = "SELECT id,IDNumber,fullname FROM IM244";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<h2>Basic HTML Table</h2>
  <table style='width:100%'>
  <tr>
    <th>id</th>
    <th>ID Number</th> 
    <th>Full Name</th>
    <th>edit</th>
    <th>delete</th>

  </tr>";
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $IDNumber = $row['IDNumber'];
        $fullname= $row['fullname'];
      echo  "<tr>
             <td>$id</td>
            <td>$IDNumber</td>
            <td>$fullname</td>
            <td><a href='edituser.php?id='>Edit</a></td>
            <td><a href='edituser.php?id='>delete</a></td>
            </tr>";
     }
     echo "</table>";
} else {
      echo "0 results";
}
?>