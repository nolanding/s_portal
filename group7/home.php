<!DOCTYPE html>
<html>
<head>
	<title>
		Main Page
	</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home1.css">

</head>


<body id="grad1">


	<div id="header" style="text-align: center;">
		<img src="images/nit.png" alt="nit_logo" style="float: left; width:100px;height:100px;opacity: 0.7">
			<h1>NIT DURGAPUR</h1>
			<h2>Student Portal</h2>

		</div>
			<div class="container">
				<ul class="navbar">
					<li><a href="home.php">Home</a></li>
					<li>
							    <a href="user_register.php">Signup</a>
							<!--    <a href="login2.html">Administration Signup</a> !-->
					</li>
					<li><a href="http://www.nitdgp.ac.in/cse/index.php">Contact</a></li> 
					<li>
						<div class="dropdown">
							<button class="dropbtn">Login</button>
							<div class="dropdown-content">
								<a href="<?php echo 'user_login.php' ?>">Student Login</a>
								<a href="admin_login.php">Admin Login</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		<div>
		<div class="col-container">
			<div class="leftcolumn">

			</div>

		</div>
			<div class="container" style="padding: 0px 0 0 0; margin: 0px; width: 100%">
</div>
</div>
	<div class="row" style="padding-top:40px;margin-left: 400px;" >
		<img src="images/admin.jpg" class="img" style="height: 300px;width:300px;">
		<img src="images/student.png" class="img" style="height: 300px;width:300px;">
	</div>
	<div class="row">
	<h4 style="margin-left:450px;font-size: 30px;font-style:none;font-family:helvetica;">
		<a href="admin_login.php">Admin Login</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="user_login.php">Student Login</a>
	</h4>
	</div>


<div class="row" style="background-color:#25252D">
<div class="col-xs-12">
<h5 style="text-align:center;margin-top:180px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
</div>

</body>
</html>
