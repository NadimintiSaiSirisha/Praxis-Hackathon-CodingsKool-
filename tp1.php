<?php
$servername = "localhost";
$naam=$_REQUEST["name"];
$pasword=$_REQUEST["password"];
$dbname = "hacathon";
$username="root";
$password="";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `name`, `pwd` FROM `user` WHERE name='".$naam."' && pwd='".$pasword."'";
$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {

    echo "<h1>Valid credentials</h1>";


    }
   
else {
    echo "<h1>Invalid credentials</h1>";
echo '<a href="validate.php">Please try again</a>';
}
$conn->close();
?>