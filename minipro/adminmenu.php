<?php include'dbconn.php'?>
<?php session_start(); 
$var=$_SESSION['manager'];?>
<?php 
if(isset($_POST['delbut'])){
$dvar=$_POST['delid'];
$query="DELETE FROM `registertable` WHERE `registertable`.`essn` ='$dvar' and mgrid='$var'";
$res=mysqli_query($conn,$query);
mysqli_close($conn);
}
?>
<?php
if (isset($_POST['updbut'])) {
  $uvar=$_POST['uptdpass'];
  $query1="UPDATE `admintable` SET `password`='$uvar' WHERE userid='sukruth1234'";
  mysqli_query($conn,$query1);
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>adminmenu</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="adminmenu.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
body { 
    background-image:url(ph1.jpg);

   background-re
peat:no-repeat;

   background-size:cover;

}
</style>
</head>
<body>
  <script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>
	<div class="container">
		<ul>
  <li><a href="register.php">Register</a></li>
  <li><a data-toggle="modal" data-target="#exampleModalCenter1" style="color: white">ChangePassword</a></li>
  <li><a href="empdet.php">EmployeeDetails</a></li>
  <li><a  data-toggle="modal" data-target="#exampleModalCenter" style="color: white">Delete</a></li>
  <li><a href="accrej.php">Requests</a></li>
  <li><a  href="welcome.php" style="margin-left: 300px">LogOut</a></li>
</ul>
	<div class="container ex1">
 <h1 class="display-3">Hello!</h1>
</div>
</div>

<!-- Modal -->
<form action="adminmenu.php" method="POST">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Enter Employee Id</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input class="form-control mr-sm-2" type="search" placeholder="Enter Id" aria-label="Search" name="delid" required pattern="[0-9]*">
       <br>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delbut" >Delete</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Modal -->
<form action="adminmenu.php" method="POST">
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Enter New Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input class="form-control mr-sm-2" type="search"  aria-label="Search" name="uptdpass">
       <br>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="updbut" >Update</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>