<?php
   require_once("includes/connection.php");
   require_once("includes/functions.php");
  require_once("includes/sessions.php");; 
?>

<html>
  <head>
    <title>Admin Login Page </title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- // <script type="text/javascript" src="/javascript/login.js"></script> -->
    <script type="text/javascript" src="js/admin-js.js"></script>
  <head>

<?php
  // if (logged_in()) {
  //   redirect_to("admin.php");
  // }

  if (isset($_POST['submit'])) {


    
    $Email_Id = $_POST['Email_Id'];
    $password = $_POST['password'];

    
    $query = "SELECT id,email,pwd FROM admin_login WHERE email = '$Email_Id' AND pwd = '$password' ;";


 


    $result_set = mysqli_query($conn,$query);

    // echo($result_set);

    if( !$result_set ) {
    $message=("Error description: " . mysqli_error($conn));
    }

    global $message;
    $message = "";
    if (mysqli_num_rows($result_set)==1){
        $found_user = mysqli_fetch_array($result_set);
        $_SESSION['user_id'] = $found_user['id'];
        $_SESSION['Email_Id'] = $found_user['email'];
        header("location: admin.php");
      } else {
        $message = "<h4><b>Wrong Email_Id or password</b></h4>";
        echo $message;
      }

      }
    

?> 

  <body id="grad1">
    <div id="header" style="text-align: center;">
    <img src="images/nit.png" alt="nit_logo" style="float: left; width:100px;height:100px;opacity: 0.7">
      <h1>NIT DURGAPUR</h1>
      <h2>Student Portal</h2>
    </div>
    <div class="container">
        <ul class="navbar">
          <li><a href="home.php">Home</a></li>
          <li><a href="user_register.php">Student Signup</a></li>
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
    <h1 style="text-align:center;font-size: 60px;padding-top: 20px">ADMIN LOGIN</h1>
    <form name="admin_login" onsubmit="return validate(this)" action="admin_login.php" method="post">
      
      <table align="center" cellpadding = "15" style="font-size: 40px;font-color:black; ">
          <!--- First Name -->
          <tr>
            <td>Email Id</td>
            <td><input type="text" required name="Email_Id" maxlength="50" placeholder="abc@gmail.com" onfocusin="email_in()" onfocusout="email_out()" size="20" style="height:50px; width:300px; font-size: 30px; text-align:center"/>
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" required name="password" maxlength="50" placeholder="*******" style="height:50px; width:300px; font-size:30px; text-align: center;"/></td>
          </tr>
      </table>
      <div class="buttons">
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>
      <br>
    </form>
    <div class="row" style="background-color:#25252D">
<h5 style="text-align:center;color:#fff;margin-top: 110px;">Copyright © 2018. All Rights Reserved. National Institute of Technology, Durgapur</h5>
</div>
</div>
    <!-- <script src="${resource(dir:'js', file:'valid.js') }"></script> -->
  </body>
</html>       
