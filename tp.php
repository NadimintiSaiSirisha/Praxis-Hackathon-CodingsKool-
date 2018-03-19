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

$conn->close();
}
?>