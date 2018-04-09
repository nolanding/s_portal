<?php 
	
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>



<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	$query = "Select id,f_name,email,m_no,regn_no,pwd from student_details where status= 1";
	$result = mysqli_query($conn,$query);
?>

	 
<html>
<head>
	<title>
		Main Page
	</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body id="grad1">
	<div id="header" style="text-align: center;">
		<img src="images/nit.png" alt="nit_logo" style="float: left; width:100px;height:100px">
			<h1>NIT DURGAPUR</h1>
			<h2>Student Portal</h2>

		</div>
		<div class="container">
			<ul class="navbar">
				<li><a href="admin.php">Home</a></li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student Details</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student</a>
							<a href="admin_delete.php">Delete Student </a>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student</button>
						<div class="dropdown-content">
						    <a href="admin_create.php">Add Students</a>
						    <a href="admin_show.php">Accepted Students</a>
						<!--    <a href="login2.html">Administration Signup</a> --!-->
					  	</div>
					</div>
				</li>
				<li><a href="admin_logout.php">Admin Logout</a></li> 
			</ul>
			<hr>
			<form action="admin_student_edit.php" method="POST">
				<table style="color: #000033; font-size: 30px;margin-top: 30px;" align="center" border="2px" bordercolor="black"; >
					<tr>
						<td colspan="3" style="text-align: center"><b>Registered Student Details</b></td>
					</tr>
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						
					</tr>	

					<?php 
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php 	echo $row['f_name']; ?> </td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regn_no']; ?> </td>

							
						</tr>	

					<?php } ?>
		
				</table>
			</form>
		</div>
			<div class="row" style="background-color:#25252D">
<h5 style="text-align:center;margin-top:200px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
</body>
</html>
