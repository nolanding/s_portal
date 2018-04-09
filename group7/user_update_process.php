<?php 
	
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("user_login.php");
?>


<?php
	global $message;
	$message = "";
	if(isset($_POST['submit']))
	{
		$index = $_SESSION['id1'];
		$username = $_POST['First_Name'];
		$lastname = $_POST['Last_Name'];
		$address = $_POST['address'];
		$email = $_POST['Email_Id'];
		$date_of_birth=$_POST['dob'];
		$mobile = $_POST['Mobile_Number'];
		$nationality = $_POST['Country'];

		$query = "UPDATE student_details SET f_name='{$username}',l_name='{$lastname}',p_addr='{$address}',email='{$email}',m_no='{$mobile}',country='{$nationality}' WHERE id = '{$index}' ";
		$result = mysqli_query($conn,$query);
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($conn));
    }
		confirm_query($result);
		$message =  'Updated details.';
	}
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
			<li><a href="user.php">Home</a></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Notices</button>
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
			<li><a href="user_logout.php">Logout</a></li> 
		</ul>
		<hr><br><br>
		<table style="margin-left: 200px;margin-right: 200px;font-size: 30px;">
			<tr><td colspan="2"><h1 align="center" style="color: black; font-size: 50px;font-family: cursive;"> <?php echo $message ?> </h1></td>
			<tr>
				<td><b>Name</b></td>
				<td><?php echo $username," ";
						echo $lastname
				?></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<td><b>Date of Birth</b></td>
				<td><?php echo $date_of_birth ?></td>
			</tr>

			<tr>
				<td><b>Address</b></td>
				<td><?php echo $address ?></td>
			</tr>

			<tr>
				<td><b>Contact no.</b></td>
				<td><?php echo $mobile ?></td>
			</tr>

			<tr>
				<td><b>Nationality</b></td>
				<td><?php echo $nationality ?></td>
			</tr>

		</table>		
	</div>
	<div class="row" style="background-color:#25252D">
<h5 style="text-align:center;margin-top:180px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
<br>
</body>
</html>
