<html>
<head>
<title>Coding's Kool | DBMS </title>
		<link rel="shortcut icon" href="#" type="image/jpg" />
		<link rel="stylesheet" href="mainhead.css">
	</title>
</head>
<body>

<div class="flex-container">
  <div class="flex-item1">
  	<a href="home.html"><img src="code.png" height = "150" width = "150"  alt="Codin'sKool"></a>
  </div>
  <div class="flex-item10">
  	<a href="validate.php">Login/Sign Up</a>
  </div>
</div>
<div class="flex-container1">
  <div class="flex-item4">
  	<a href = "Tutorials.html">Tutorials</a>
  </div>
  <div class="flex-item5">
  	<a href="problems.html">Problems</a>
  </div>
    <div class="flex-item6">
  	<a href="#">Assignments</a>
  </div>
  <div class="flex-item7">
  	<a href="about.html">About</a>
  </div> 
  <div class="flex-item8">
 	<a href="#">Contact Us</a>
 </div>
</div>
<br><br>
<center>
<?php 
$naam=$_REQUEST["name"];
$paswd=$_REQUEST["password"];
$mailid=$_REQUEST["email"];
$servername="localhost";
$username="root";
$password="";
$dbname="hacathon";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
echo $conn->connect_error;
}
else{

$q="INSERT INTO `user`(`pwd`,`name`,`email`) VALUES ('".$paswd."','".$naam."','".$mailid."')";
mysqli_query($conn,$q);
echo"Hi ".$naam."! You have successfully registered! Enjoy coding!";

$conn->close();
}
?>

</html>