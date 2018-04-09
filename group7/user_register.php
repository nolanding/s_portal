<!doctype html>
<html>
<head>
<script type="text/javascript" src="js/valid2.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<title>Student Information</title>
<link rel="stylesheet" type="text/css" href="css/register.css">

</head>
<body id="grad1">
	<div id="header" style="text-align: center;">
		<img src="images/nit.png" alt="nit_logo" style="float: left; width:100px;height:100px;">
			<h1>NIT DURGAPUR</h1>
			<h2>Student Portal</h2>
	</div>
	<div class="container">
        <ul class="navbar">
          <li><a href="home.php">Home</a></li>
          <li>
                  <a href="user_register.php">Signup</a>
              <!--    <a href="login2.html">Administration Signup</a> -->          </li>
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
    
		<h1 style="text-align:center; color:black; padding-top: 20px;">SIGN-UP</h1>

		<form name="Student_signup" onsubmit ="return validateForm()" action="user_form_processing.php" method="post">
			<legend>
				<b> Personal Details</b>
			</legend>
			<fieldset style="background-color:#d3d3d3">
				<table align="center" cellpadding = "10">
					<!--- First Name -->
					<tr>
						<td>FIRST NAME</td>
						<td><input type="text"  name="First_Name" maxlength="30" placeholder="First Name" onfocusin="name_in()" onfocusout="name_out()" required="required" />
						</td>
					</tr>
		 
					<!--- Last Name -->
					<tr>	
						<td>LAST NAME</td>
						<td><input type="text"  name="Last_Name" maxlength="30" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" />
						</td>
					</tr>

					<!--- Date Of Birth -->
					<tr>
						<td>DATE OF BIRTH</td>
						<td><input type="date"  name="dob" placeholder="1997/11/21" onfocusout="dob_out()" /></td>
					</tr>
					<tr>	
						<td>AGE</td>
						<td><input type="text" name="age" maxlength="10" placeholder="21" onclick="getage()" />
						</td>
					</tr>
					<!--- Mobile Number -->
					<tr>
						<td>MOBILE NUMBER</td>
						<td><input type="text"  name="Mobile_Number" maxlength="10" placeholder="9083583214" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" /></td>
					</tr>
					<!--- Gender -->
					<tr>
						<td>GENDER</td>
						<td>
							Male <input type="radio" name="Gender" value="Male" />
							Female <input type="radio" name="Gender" value="Female" checked/>
						</td>
					</tr>
					<!--- Address -->
					<tr>
						<td>
							PRESENT ADDRESS
						</td>
						<td>
							<textarea  name="addr"  rows="4" cols="30" placeholder="745,Chandwani Villa, Nirala nagar, Raebareli" required="required"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							Same as<input  type="radio" name="address" value="1" onclick="getaddress()">&nbsp;
							Different<input type="radio" name="address" value="0">&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							PERMANENT ADDRESS 
						</td>
						<td>
							<textarea name="Address" rows="4" cols="30" placeholder="745,Chandwani Villa, Nirala nagar, Raebareli" ></textarea>
						</td>
					</tr>
					<!--- City -->
					<tr>
						<td>CITY</td>
						<td>
							<input type="text"  name="City" maxlength="30" placeholder="Raebareli" required="required" />
						</td>
					</tr>
					<!--- Pin Code -->
					<tr>
						<td>PIN CODE</td>
						<td>
							<input type="text" name="Pin_Code" maxlength="6" placeholder="229001" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" required="required" />
						</td>
					</tr>
					<!--- State -->
					<tr>
						<td>STATE</td>
						<td>
							<input type="text"  name="State" maxlength="30" placeholder="Uttar Pradesh" required="required" />
						</td>
					</tr>
				 
					<!--- Country -->
					<tr>
						<td>COUNTRY</td>
						<td><input type="text"  name="Country" placeholder="India" required="required" /></td>
					</tr>
				</table>
			</fieldset>
		<br>
		<legend><b> Academic Details </b></legend>
		<fieldset style="background-color: #d3d3d3 ">
			<br>
			<table>
				<!--- Qualification-->
				<thead>
					<tr>
						<td>QUALIFICATION</td>
					</tr>
					<tr>
						<!--<td align="center"><b>Sl.No.</b></td> !-->
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage</b></td>
						<td align="center"><b>Year of Passing</b></td>
					</tr>
				</thead>
				<tr>
					<!--<td align="center">1</td> !-->
					<td align="center">Class X</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="ClassXII_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">COURSES APPLIED FOR: </td>
					<td>
						B.Tech<input class="xshow" type="radio" name="course" value="B.Tech" checked>&nbsp;
						M.Tech<input class="xshow" type="radio" name="course" value="M.Tech">&nbsp;
						MBA<input type="radio" name="course" value="MBA">&nbsp;
						MCA<input type="radio" name="course" value="MCA">&nbsp;
					</td>
				</tr>
				<br>
				<tr class="show" >
					<td colspan="2">BRANCH</td>
					<td colspan="2">
						<select name="branch">
							<option value="0">--Select--</option>
							<option value="BT">Biotechnology</option>
							<option value="CHE">CHEMICAL ENGINEERING</option>
							<option value="CIV">Civil engineering</option>
							<option value="CSE">Computer Science and engineering</option>
							<option value="ECE">Electronics and communication Engineering</option>
							<option value="IT">Information Technology</option>
							<option value="ME">Mechanical engineering</option>
							<option value="MME">Metallurgical and materials engineering</option>
						</select>
					</td>
				</tr>
				<!--- Registration No -->
				<tr>
					<td colspan="2">REGISTRATION NO</td>
					<td colspan="2"><input type="text"  placeholder="" name="regn_no" maxlength="50" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" /></td>
				</tr>
				<!--- Roll No-->
				<tr>
					<td colspan="2">ROLL NO</td>
					<td colspan="2"><input type="text"  name="roll_no" maxlength="50" placeholder="" onclick="getstudentid()" /></td>
				</tr>
				</table>
				</fieldset>
				<br>
				<legend><b> Login Details </b></legend>
				<fieldset style="background-color: #d3d3d3">
				<table>
				
				<!--- Email Id -->
				<tr>
					<td colspan="2">EMAIL ID</td>
					<td colspan="2"><input placeholder="deekshachandvani@gmail.com"  type="text" name="Email_Id" maxlength="50" onfocusin="email_in()" onfocusout="email_out()"/></td>
				</tr>
				<br>
				<!--- Submit and Reset -->
				<tr>
					<td colspan="2">PASSWORD</td>
					<td colspan="2"><input type="password"  id="pwd" name="password" maxlength="25" placeholder="********"/></td>
				</tr>
				<br>
				<tr>
					<td colspan="2">CONFIRM PASSWORD</td>
					<td colspan="2"><input type="password"  id="cpwd" name="cpassword" maxlength="25" placeholder="********" /></td>
				</tr>
				<br>	
			</table>
			<div class="buttons">
				<button type="submit" name="submit">Submit</button>
				<button type="reset">Reset</button>
			</div>
		</fieldset>
	</form>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		$(".show").hide();
    		$('input[type=radio]').change(function(){
	        	var isShow = $(this).hasClass('xshow');
	        	if (isShow) {
	        		$(".show").show();	
	        	} else {
	        		$(".show").hide();
	        	}
    		});
		});
	</script>
	<div class="row" style="background-color:#25252D">
<div class="col-xs-12">
<h5 style="text-align:center;margin-top:10px;color:#fff">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
</div>
	</body>
</html>