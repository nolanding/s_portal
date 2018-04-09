<?php
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>

<?php
	$query = "Select id,f_name,email,m_no,regn_no from student_details";
	$result = mysqli_query($conn,$query);
?>	

<?php
	$message="Hello";
	if(isset($_POST['submit'])){
		$count=0;
		while($row = mysqli_fetch_assoc($result))
		{
			$index = $row['id'];
			// print_r($_POST);
			if(array_key_exists($index, $_POST))
			{
				$count = $count+1;
				// echo $index;
				// print_r($_POST);
				$query = "SELECT * FROM student_details ";
			    $query .= "WHERE id = '{$index}' ";
			    $result_set = mysqli_query($conn,$query);
			    confirm_query($result_set);

			    if (mysqli_num_rows($result_set)==1)
			    {
			    	$query2 = "DELETE FROM student_details ";
			    	$query2 .= "WHERE id = '{$index}' ";
			    	$result_set2 = mysqli_query($conn,$query2);
			    	confirm_query($result_set2);
			    }
			}
		}
		global $message;
		$message= "";
		if($count<=0)  $message = 'No students were selected';
		else $message= 'Selected students deleted';
	}
	$query = "Select id,f_name,email,m_no,regn_no from student_details";
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
						<button class="dropbtn">Student Info</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student</a>
							<a href="admin_delete.php">Delete Student</a>
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
			<br>
			<br><br><br><br><br>
			<form action="admin_delete.php" method="POST">
				<table style="color: #000033; font-size: 30px" align="center" border="2px" bordercolor="black">
					<tr>
						<th colspan="4" style="text-align: center">Select Student to Delete.</th>
					</tr>
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th><i>Select</i></th>
					</tr>	

					<?php 
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php 	echo $row['f_name']; ?> </td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regn_no']; ?> </td>
							<td > <input type="checkbox" name="<?php echo $row['id'] ?>" style="background-color: #000033;"> </td>
						</tr>	

					<?php } ?>
					<tr>
						<th colspan="5"> <input type="submit" name="submit" value="Delete entries" style="font-size: 30px;float: left"> </th>
					</tr>
				</table>
			</form>
		</div>
			<div class="row" style="background-color:#25252D">
<div class="col-xs-12">
<h5 style="text-align:center;margin-top:20px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
</div>
</body>
</html>