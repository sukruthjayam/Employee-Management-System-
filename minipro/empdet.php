<?php include'dbconn.php'?>
<?php session_start(); ?>
<?php
$var=$_SESSION['manager'];
$query="CALL `displayemp`($var);";
$result=mysqli_query($conn,$query);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>employeDetails</title>
			<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
<style type="text/css">
	.btn-outline-info{
	    margin-left: 1250px;
	}
</style>
</head>

  <div   >
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">EmpSSN</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
       <th scope="col">PhoneNo.</th>
      <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>".$row['essn']."</td>";
      echo "<td>".$row['fname']."</td>";
      echo "<td>".$row['lname']."</td>";
      echo "<td>".$row['phone no']."</td>";
      echo "<td>".$row['designation']."</td>";
    echo "</tr>";
    }
    
    ?>
  </tbody>

</table>
</div>
<a href="adminmenu.php" class="btn btn-outline-info"  style="margin-left: 1200px">Menu</a>
</body>
</html>