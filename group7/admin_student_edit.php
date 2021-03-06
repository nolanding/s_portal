<?php 
	require_once("includes/functions.php");
	require_once("includes/connection.php"); 
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>

<?php
	$query = "Select * from student_details";
	$result = mysqli_query($conn,$query);

	while($row = mysqli_fetch_assoc($result))
	{
		if (!$_POST) {
			$message="No one are selected to edit";
			redirect_to("admin_student_edit_error.php");
		}
		// print_r($_POST);
		if(array_key_exists($row['id'], $_POST)){
			$index = $row['id'];
			$query1 = "Select * from student_details where id ='{$index}'";

			$_SESSION['id1'] = $index;
			$result_set = mysqli_query($conn,$query1);
			if( !$result_set ) {
    			$message= ("Error description: " . mysqli_error($conn));
    		}

			$row2 = mysqli_fetch_assoc($result_set);
			$firstname = $row2['f_name'];
			$lastname = $row2['l_name'];
			$address = $row2['p_addr'];
			$email = $row2['email'];
			$mobile = $row2['m_no'];
			$nationality = $row2['country'];
			 // print_r($result_set);
			break;
		}
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
				<li><a href="admin.php">Home</a></li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student Info</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student </a>
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
			<hr><br>
		<form action="admin_update_process.php" name="Student_signup" method="POST" align="center" style="background-color: #d3d3d3; margin-left: 300px;text-align:center;margin-right:300px;border:4px solid black" >
					<h1 style="color: #000066">Details</h1> 
					<table align="center" cellpadding="10" style="text-align:center;font-size: 30px;">
						<tbody><tr>
							<th> First Name</th>
							<td> <input type="text" name="First_Name" placeholder="First Name" onfocusin="name_in()" onfocusout="name_out()" required="required" value="<?php  echo $firstname ?>" style="font-size: 20px;"  </td>
							</tr>
							
							<tr>
							<th> Last Name </th>
							<td> <input type="text" name="Last_Name" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" value="<?php echo $lastname ?>" style="font-size: 20px;"> </td>
						</tr>
						
						<tr>
							<th> Address </th>
							<td> <textarea name="address" rows="3" cols="22" style="font-size: 20px;"><?php echo $address ?>    </textarea> </td>
							<!-- <th> Addition Information </th>
						 	<td> <textarea name="Info" rows="3" cols="22" placeholder="Additional Information" required="required"> </textarea> </td> -->
						</tr>
						
						<tr>
							<th> Email </th>
							<td> <input type="text" name="Email_Id" placeholder="example@domain.com" onfocusin="email_in()" onfocusout="email_out()" value="<?php echo $email ?>" style="font-size: 20px;"> </td>
						</tr>
						
						<tr>
							<th> Password </th>
							<td> <input type="password" id="pwd" name="password" value="" placeholder="*******" required="required" style="font-size: 20px;"> </td>
						</tr>
						
						<tr>
							<th> Re-enter Password </th>
							<td> <input type="password" id="cpwd" name="cpassword" placeholder="Enter password again" required="required" style="font-size: 20px;"></td>
						</tr>
						
						<tr>
							<th> Mobile </th>
							<td> <input type="text" name="Mobile_Number" placeholder="Enter mobile number" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" value="<?php echo $mobile ?>" style="font-size: 20px;"></td>
							
						</tr>
						
						<tr>
							<th> Date Of Birth</th>
							<td> <input type="date" name="dob" style="font-size: 20px;"> </td>
						</tr>
						
						<tr>
							<th> Gender </th>
							<td style="color: #000066">
								<input type="radio" name="gender" value="male" checked=""> Male
								<input type="radio" name="gender" value="female"> Female
						 	</td>
						</tr>
						
						<tr> 
						 	<th> Age </th>
						 	<td> <input type="text" name="age" placeholder="enter your age" required="required" onfocusin="getage()" style="font-size: 20px;"></td>
						</tr>
						<tr>
						 	<th> Country </th>
						 	<td> <input type="text" name="Country" placeholder"enter="" your="" nationality"="" required="required" value="<?php echo $nationality ?>" style="font-size: 20px;"></td>
						</tr>
					</tbody></table>
				</br></br>
					<div class="buttons" id="submit">
						<button type="submit" name="submit" value="Update" style="font-size: 30px;color: #000066">Submit</button>
						<button type="reset" style="font-size: 30px;color: #000066">Reset</button>
					</div>
					<br>
      
    <br>
    
		</form></div>
		
	
		</body></html>