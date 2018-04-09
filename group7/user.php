<?php 
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
	require_once("includes/connection.php");

?>

<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("user_login.php");

?>
<?php
	// echo $_SESSION['Email'];
	// $index = $_SESSION['user_id'];
	// $query = "SELECT * FROM student_details ";
	// $query .= "WHERE email = '$_SESSION['Email']' ";
	// echo "string";
	$k=$_SESSION['Email'];
	$query = "SELECT * FROM student_details WHERE email='$k'";
	$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($result);
			//echo $row2;
			$firstname = $row['f_name'];
			//echo $firstname;
			$lastname = $row['l_name'];
			$address = $row['p_addr'];
			$email = $row['email'];
			$mobile = $row['m_no'];
			$dateofbirth=$row['date'];
			//$country = $row['Country'];
			//$image=$row['image'];
			#echo $image;
			 // print_r($result_set);
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
	<script type="text/javascript" src="js/valid2.js"></script>
</head>
<body id="grad1">
	<div id="header" style="text-align: center;">
		<img src="images/nit.png" alt="nit_logo" style="float: left; width:100px;height:100px">
			<h1>NIT DURGAPUR</h1>
			<h2>Student Portal</h2>

		</div>
		<div class="container">
		<ul class="navbar">
			<li><a href="user.php">Home</a></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Details</button>
					<div class="dropdown-content">
						<a href="user_edit.php">Edit Details</a>
						<!-- <a href="admin_login.php">Administrator Login</a> -->
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Results</button>
					<div class="dropdown-content">
					    <a href="results.php">Results</a>
					<!--    <a href="login2.html">Administration Signup</a> !-->
				  	</div>
				</div>
			</li>
			<li><a href="user_logout.php">Student Logout</a></li> 
			</ul><br><br><br><br>
		<table style="margin-left: 200px;margin-right: 200px;font-size: 30px;border:1px solid black; color: #000066;" align="center" >
				<tr><td colspan="2"><p style="color: #000066; margin-top: 0; font-size: 50px;font-family: cursive;"  align="center"> Welcome </p></td></tr>
	
					<tr>
						<td> <b> Name </b></td><td><?php 	echo $firstname,' ',$lastname; ?> </td>
					</tr>
					<tr>
						<td> <b> Email </b></td><td><?php 	echo $row['email']; ?> </td>
					</tr>
					
					<tr>	
						<td> <b> Registration No. </b> </td><td><?php 	echo $row['regn_no']; ?> </td>
					</tr>
					<tr>	
						<td> <b> Mobile No. </b></td><td><?php 	echo $row['m_no']; ?></td>
					</tr>
					<tr>	
						<td> <b> Date of Birth </b></td><td><?php 	echo $row['date']; ?></td>
					</tr>
					<tr>	
						<td> <b> Age </b></td><td><?php 	echo $row['age']; ?></td>
					</tr>
					<tr>	
						<td> <b> Permanent Address </b></td><td><?php 	echo $row['p_addr']; ?></td>
					</tr>
					<tr>	
						<td> <b> City </b></td><td><?php 	echo $row['city']; ?></td>
					</tr>
					<tr>	
						<td> <b> Pin Code </b></td><td><?php 	echo $row['pin']; ?></td>
					</tr>
					<tr>	
						<td> <b> Country </b></td><td><?php 	echo $row['country']; ?></td>
					</tr>
					<tr>	
						<td> <b> Registration Number </b></td><td><?php 	echo $row['regn_no']; ?></td>
					</tr>
					<tr>	
						<td> <b> Branch </b></td><td><?php 	echo $row['branch']; ?></td>
					</tr>
					<tr>	
						<td> <b> Course </b></td><td><?php 	echo $row['course']; ?></td>
					</tr>
					<tr>	
						<td> <b> Roll Number </b></td><td><?php 	echo $row['roll_no']; ?></td>
					</tr>
					
			
			</table><br><br>
	</div>
	<div class="row" style="background-color:#25252D">
<h5 style="text-align:center;margin-top:280px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
<br>
</body>
</html>
