<?php include 'dbconn.php' ?>
<?php session_start(); ?>
<!DOCTYPE html>
<?php
$var=$_SESSION['manager'];
 $query="SELECT * FROM `leaveform` where mgrid='$var'";
 $res=mysqli_query($conn,$query);
 if (isset($_POST['accbtn'])) {
 	$var=$_POST['SSN'];
 	$query1="UPDATE `leaveform` SET `status`='accepted' WHERE `reqno`='$var'";
 	mysqli_query($conn,$query1);
 header("location:accrej.php");
 }
 if (isset($_POST['rejbtn'])) {
 	$var=$_POST['SSN'];
 	$query1="UPDATE `leaveform` SET `status`='rejected' WHERE `reqno`='$var'";
 	mysqli_query($conn,$query1);
 header("location:accrej.php");
 }
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<div class="container">
	<nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST" action="accrej.php">
    <input class="form-control mr-sm-2" type="search" placeholder="Enter SNO" name="SSN" required>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="accbtn">Accept</button>
     <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="rejbtn" style="margin-left: 10px">Reject</button>
  </form>
 <a class="btn btn-outline-primary"  style="margin-left: 500px" href="adminmenu.php">Menu</a>

</nav>
     <table class="table" >
  <thead class="thead-dark">
    <tr>
    	<th scope="col">S.NO</th>
      <th scope="col">essn</th>
      <th scope="col">name</th>
      <th scope="col">Description</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>".$row['reqno']."</td>";
      echo "<td>".$row['essn']."</td>";
      echo "<td>".$row['fname']."</td>";
      echo "<td>".$row['description']."</td>";
      echo "<td>".$row['from']."</td>";
      echo "<td>".$row['to']."</td>";
      echo "<td>".$row['status']."</td>";
    echo "</tr>";
    }
    
    ?>
  </tbody>
</table>
</div>

</body>
</html>