<?php include 'dbconn.php'?>
<?php session_start(); ?>
<?php
if(isset($_POST['sub'])){
$userid=$_POST['userid'];
$var2=$_POST['pass'];
$query="SELECT `essn` FROM `login table` WHERE password='$var2' and userid='$userid'";
$res=mysqli_query($conn,$query);
if (mysqli_num_rows($res)==1) {
  $_SESSION['user']=$userid;
  header('location:userlist.php');
}
else{
  echo 'account invalid';
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UserLogin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body>
<form method="POST" action="userlogin.php">
	<div class="container ex1">
  <div class="form-group ">
    <label for="exampleInputEmail1">User ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" size='20px' aria-describedby="emailHelp" name="userid">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-dark" name="sub">Submit</button>
  </div>
</form>
</body>
</html>