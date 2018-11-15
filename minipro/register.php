<?php include'dbconn.php' ?>
<?php session_start(); ?>
<?php 
$varid=$_SESSION['manager'];
if (isset($_POST['sub'])) {
$var1=$_POST['fname'];
$var2=$_POST['lname'];
$var3=$_POST['gen'];
$var4=$_POST['phone'];
$var5=$_POST['desg'];
$var6=$_POST['add'];
$var7=$_POST['sal'];
$var15= mysqli_real_escape_string($conn,$_POST['email']);
$query="INSERT INTO `registertable` ( `fname`, `lname`, `gender`, `phone no`, `designation`, `Address`,`email`,`salary`,`mgrid`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var15','$var7','$varid')";
mysqli_query($conn,$query);
$lid=mysqli_insert_id($conn);
$var12=$_POST['comp'];
$var13=$_POST['desg'];
$var14=$_POST['exp'];
$query="INSERT INTO `expdetails` (`exid`, `company`, `designation`, `experiance`) VALUES ('$lid','$var12', '$var13', '$var14')";
mysqli_query($conn,$query);
$var16=$_POST['pass'];
$query="INSERT INTO `login table`(`essn`, `userid`, `password`) VALUES ('$lid','$var15','$var16')";
mysqli_query($conn,$query);
mysqli_close($conn);
}

 ?>
<!DOCTYPE html>

<html>
<head>
	<title>register employee</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: #2b62ef;">
  <a class="navbar-brand" style="color: white">New Registration</a>
<a href="adminmenu.php" class="btn btn-outline-light">Menu</a>
</nav>
<br>
	<div class="container">
   <form action="register.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="username">FirstName</label>
      <input type="text" class="form-control" id="username" name="fname" placeholder="FirstName" required pattern="[A-Za-z]*">
    </div>
    <div class="form-group col-md-4">
      <label for="username">LastName</label>
      <input type="text" class="form-control" id="username" name="lname" placeholder="LastName" required pattern="[A-Za-z]*">
    </div>
   <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control" name="gen">
        <option >Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
  <div class="form-row"> 
    <div class="form-group col-md-4">
      <label for="ph">phone no.</label>
      <input type="text" class="form-control" id="ph" name="phone" placeholder="mobile no." required pattern="[0-9]*" maxlength="10">
    </div>
    <div class="form-group col-md-4">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="designation" name='desg' placeholder="designation" required >
    </div>
     <div class="form-group col-md-4">
      <label for="add">Address</label>
      <input type="text" class="form-control" id="add" name='add' placeholder="Address" required >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="salary">Salary</label>
      <input type="text" class="form-control" id="salary" name="sal" placeholder="salary" required pattern="[0-9]*" maxlength="6">
    </div>
     <div class="form-group col-md-4">
      <label for="salary">Email</label>
      <input type="email" class="form-control" id="salary" name="email" placeholder="email" required >
    </div>
     <div class="form-group col-md-4">
      <label for="salary">Password</label>
      <input type="text" class="form-control" id="salary" name="pass" placeholder="password" required minlength="5">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-3">
      <label for="company">Experiance details</label>
      <input type="text" class="form-control" id="company" name='comp' placeholder="company" required pattern="[A-Za-z]*">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">.</label>
      <input type="text" class="form-control" id="inputState" name="desg" placeholder="designation" required >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">.</label>
      <input type="number" class="form-control" id="inputState" name="exp" placeholder="Experience" required max="10">
    </div>
  </div>
  <button type="submit" name='sub' class="btn btn-primary">Save</button>
</form>
</div>
</body>
</html>