<html>
<title> Login page</title>
<head><link rel="stylesheet" type="text/css" href="login1.css" media="screen" />
<link rel="shortcut icon" href="#" type="image/jpg" />
		<link rel="stylesheet" href="mainhead.css">
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
 	<a href="progress.html">Profile</a>
 </div>
</div>
</div>
<form id="form" name="form" action="tp1.php" method="post">
	<div id="block">
		<label id="user" for="name">p</label>
		<input type="text" name="name" id="name" placeholder="Username" required/>
		<label id="pass" for="password">k</label>
		<input type="password" name="password" id="password" placeholder="Password" required />
		<input type="submit" id="submit" name="submit" value="a"/>
	</div>
</form>
<div id="option"> 
	<a href="sql.php"><p>Sign Up</p></a> 
	<a href="#">forgot?</a>
</div>

</body>


</html>