<?php 
	require_once("includes/functions.php");
	require_once("includes/connection.php"); 
?>



<?php	
	global $message;
		if(isset($_POST['submit']))
		{
			// Perform query
			// print_r($_POST);
			$email=$_POST["Email_Id"];
			$pwd=$_POST["password"];
			$f_name=$_POST["First_Name"];
			$l_name=$_POST["Last_Name"];
			$dat=$_POST["dob"];
			$age=$_POST["age"];
			$mobile=$_POST["Mobile_Number"];
			$p_adrr=$_POST["addr"];
			$pm_adrr=$_POST["Address"];
			$city=$_POST["City"];
			$pin=$_POST["Pin_Code"];
			$state=$_POST["State"];
			$country=$_POST["Country"];
			$gender=$_POST["Gender"];
			$regn_no=$_POST["regn_no"];
			$branch=$_POST["branch"];
			$course=$_POST["course"];
			$r_no=$_POST["roll_no"];
			// $ten_board=$_POST["ClassX_Board"];
			

			// echo $r_no;

			$sql="SELECT * FROM student_details WHERE regn_no='$regn_no'";
			$check=mysqli_query($conn,$sql);
 		    $checkrows=mysqli_num_rows($check);

 		    if($checkrows>0) {
			      $message = "<h2>User with same registration number already exists.Try again with a different registration number</h2>";
			   } else {  
			 $query = "
		  		INSERT INTO student_details(f_name,l_name,date,age,m_no,p_addr,pm_addr,city,pin,state,country,regn_no,branch,course,roll_no,email,pwd,status) VALUES ('$f_name','$l_name','$dat','$age','$mobile','$p_adrr','$pm_adrr','$city','$pin','$state','$country','$regn_no','$branch','$course','$r_no','$email','$pwd',0)";
		  		  

			$result = mysqli_query($conn,$query);

			if(!$result){
				die("<b><b>Registration Failed.</b></b>");
			}
			else{
				$message = "Registration Successful";
			}
		}
		
			// Close the database connection
			mysqli_close($conn);
		}
?>	



<html>
	<head>
		<title>Main Page</title>
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
					<li><a href="#home">Home</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Login</button>
							<div class="dropdown-content">
								<a href="user_login.php">Student Login</a>
								<a href="admin_login.php">Administrator Login</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Signup</button>
							<div class="dropdown-content">
							    <a href="user_register.php">Student Signup</a>
							<!--    <a href="login2.html">Administration Signup</a> --!-->
						  	</div>
						</div>
					</li>
					<li><a href="about_us.php">About Us</a></li> 
				</ul><hr>
				<h1 align="center"> <?php echo $message ?> </h1>
				<table style="margin-left: 200px;font-size: 30px;">
			<tr><td colspan="2"><h1 align="center" style="color: black; font-size: 50px;font-family: cursive;"> <?php echo $message ?> </h1></td>
			<tr>
				<td><b>Name</b></td>
				<td><?php echo $f_name," ";
						echo $l_name
				?></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<td><b>Date of Birth</b></td>
				<td><?php echo $dat ?></td>
			</tr>

			<tr>
				<td><b>Address</b></td>
				<td><?php echo $p_adrr ?></td>
			</tr>

			<tr>
				<td><b>Contact no.</b></td>
				<td><?php echo $mobile ?></td>
			</tr>

			<tr>
				<td><b>Nationality</b></td>
				<td><?php echo $country;?></td>
			</tr>
		</table>
</div>
</body>
</html>