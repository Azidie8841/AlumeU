<?php
include 'header.php';
include 'config.php';
// sql to delete a record
if (isset($_GET['ContentID'])){
$ContentID=$_GET['ContentID'];
$sql = "DELETE FROM IM247 WHERE ContentID= $ContentID";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record deleted successfully');</script>";
  echo"<Script>window.location.replace('listIM247.php');</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>


<div class="row">
 <div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">content_copy</i>
      </div>
      <p class="card-category">Used Space</p>
      <h3 class="card-title">49/50
        <small>GB</small>
      </h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-danger">warning</i>
        <a href="javascript:;">Get More Space...</a>
      </div>
    </div>
  </div>
 </div>
 <div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">store</i>
      </div>
      <p class="card-category">Revenue</p>
      <h3 class="card-title">$34,245</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">date_range</i> Last 24 Hours
      </div>
    </div>
  </div>
 </div>
 <div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-danger card-header-icon">
      <div class="card-icon">
        <i class="material-icons">info_outline</i>
      </div>
      <p class="card-category">Fixed Issues</p>
      <h3 class="card-title">75</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">local_offer</i> Tracked from Github
      </div>
    </div>
  </div>
 </div>
 <div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="fa fa-twitter"></i>
      </div>
      <p class="card-category">Followers</p>
      <h3 class="card-title">+245</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">update</i> Just Updated
      </div>
    </div>
  </div>
 </div>
</div>

<?php
include 'footer.php';
?>       