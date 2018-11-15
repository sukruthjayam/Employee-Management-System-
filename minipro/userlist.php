<?php include'dbconn.php'?>
<?php session_start(); ?>
<?php
  $userid=$_SESSION['user'];
$query2="SELECT `essn` from `login table` where userid='$userid'";
$res2=mysqli_query($conn,$query2);
$row2 = mysqli_fetch_array($res2);
$query="SELECT * FROM `registertable` WHERE essn='$row2[0]'";
$res=mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
if (isset($_POST['reqbutton'])) {
    
    $var1=$row2[0];
    $var2=$_POST['description'];
    $var3=$_POST['from'];
    $var4=$_POST['to'];
    $var5=$row['mgrid'];
    $var6=$row['fname'];
$query3="INSERT INTO `leaveform`( `essn`, `description`, `from`, `to`,`status`,`mgrid`,`fname`) VALUES ('$var1','$var2','$var3','$var4','null','$var5','$var6')";
mysqli_query($conn,$query3);
}
$query4="SELECT `reqno`, `description`, `from`, `to`, `status` FROM `leaveform` WHERE essn='$row2[0]'";
$res3=mysqli_query($conn,$query4);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
    body { 
    background-image:url();

   background-repeat:no-repeat;

   background-size:cover;
   

}
td{
    font-size: 1.0em;
    font-weight: bold;
}
</style>
</head>
<body>
    <br>
  <script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist"  >
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab"  href="#home" role="tab" aria-controls="home" aria-selected="true">MyDetails</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LeaveForm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Report</a>
  </li>
  <li class="nav-item" >
    <a class="btn btn-primary" href="welcome.php" style="margin-left: 600px;" >LogOut</a>
  </li>
</ul>
</div>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
  <div class="container">
  <table class="table table-striped" >
      <tbody>
        <?php  
    echo "<tr>";
     echo "<th>FIRSTNAME</th>"; 
    echo "<td>".$row['fname']."</td>";  
    echo "</tr>";

    echo "<tr>";
     echo "<th>LASTNAME</th>"; 
    echo "<td>".$row['lname']."</td>";  
    echo "</tr>";

     echo "<tr>";
     echo "<th>ID</th>"; 
    echo "<td>".$row['essn']."</td>";  
    echo "</tr>";

     echo "<tr>";
     echo "<th>GENDER</th>"; 
    echo "<td>".$row['gender']."</td>";  
    echo "</tr>";

     echo "<tr>";
     echo "<th>PHONENO</th>"; 
    echo "<td>".$row['phone no']."</td>";  
    echo "</tr>";

     echo "<tr>";
     echo "<th>DESIGNATION</th>"; 
    echo "<td>".$row['designation']."</td>";  
    echo "</tr>";

     echo "<tr>";
     echo "<th>SALARY</th>"; 
    echo "<td>".$row['salary']."</td>";  
    echo "</tr>";
?>
  </tbody>
</table>

  </div>


  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <form method="POST" action="userlist.php">
    <div class="card w-50"  style="margin:120px 0 0 350px" >
  <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Desciption:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="write here" name="description">
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">From:</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="yyyy/mm/dd" name="from">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">To:</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="yyyy/mm/dd" name="to">
  </div>
  </div>
  <button type="submit" name='reqbutton' class="btn btn-primary">Save</button>
  </div>
</div>
</form>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

<div class="container">
     <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ReqNo.</th>
      <th scope="col">Description</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Response</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($res3)) {
      echo "<tr>";
      echo "<td>".$row['reqno']."</td>";
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

  </div>
</body>
</html>