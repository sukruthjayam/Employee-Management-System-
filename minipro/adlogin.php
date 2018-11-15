<?php include 'dbconn.php'?>
<?php session_start(); ?>
<?php
if (isset($_POST['varbutton'])) {
	$varemail=$_POST['varemail'];
	$varpassword=$_POST['varpassword'];
	$query="SELECT `mgrid` FROM `admintable` WHERE userid='$varemail' and password='$varpassword'";
	$res=mysqli_query($conn,$query);
	$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
	echo $arr["mgrid"];
	if (mysqli_num_rows($res)==1) {
  $_SESSION['manager']=$arr["mgrid"];
  header('location:adminmenu.php');
}
else{
  echo 'account invalid';
}

}

?>
<!DOCTYPE html>

<html>
<head>
  <title>adlogin</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="adlogin.css">
</head>
<body>

  <div class="container">
 
<form action="adlogin.php" method="POST">
  <div class="container ex1">
    <div class="card border-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color: black" >Admin Login</div>
  <div class="card-body">
   <div class="form-group ">
    <label for="exampleInputEmail1"style="color: black" >User ID</label>
    <input type="id" class="form-control" id="exampleInputEmail1"  size='20px' placeholder=" User ID" name="varemail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"style="color: black" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="varpassword" placeholder="Password">
    <br>
 
  <button name="varbutton" class="btn btn-dark">Submit</button>
  </div>
</div>
</div>
</div>
  
</form>
</body>

</html>
