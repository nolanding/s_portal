<?php 
	
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>


<?php
	global $message,$username;
	if(isset($_POST['submit']))
	{
		$index = $_SESSION['id1'];
		$username = $_POST['First_Name'];
		$lastname = $_POST['Last_Name'];
		$date_of_birth=$_POST['dob'];
		$address = $_POST['address'];
		$email = $_POST['Email_Id'];
		$mobile = $_POST['Mobile_Number'];
		$nationality = $_POST['Country'];

		$query = "UPDATE student_details SET f_name='{$username}',l_name='{$lastname}',p_addr='{$address}',email='{$email}',m_no='{$mobile}',country='{$nationality}' WHERE id = '{$index}' ";
		$result = mysqli_query($conn,$query);
		if( !$result ) {
    		$message = ("Error info: " . mysqli_error($conn));
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
				<li><a href="admin.php">Home</a></li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student Info</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student Info</a>
							<a href="admin_delete.php">Delete Student Info</a>
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
			</ul><hr>
			
		
		<table style="margin-left: 200px;margin-right: 200px;font-size: 30px;">
			<tr><td colspan="2"><h1 align="center" style="color: black; font-size: 60px;font-family: cursive;"> <?php echo $message ?> </h1></td>
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

		</table>		</div>	
</body>
</html>
