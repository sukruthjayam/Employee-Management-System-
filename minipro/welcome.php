<?php
session_start();
 ?>
<?php
	session_unset();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome!!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="welcome.css">
	<style type="text/css">
		.btn-outline-success{
font-size: 30px;
font-family: sans-serif;

		}
	</style>
</head>
<body>
<div class="container">
	<h1>welcome</h1>
	<a href="AdLogin.php">
	<button type="button" class=" btn btn-outline-success">Admin Login</button>
   </a>
	<br>
	<br>
	<a href="userlogin.php">
	<button type="button" class="btn btn-outline-success">User Login</button>
	</a>
</div>
</body>
</html>