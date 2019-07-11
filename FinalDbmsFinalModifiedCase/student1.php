<!DOCTYPE html>
<html>
  <head>
    <title>Pace Coaching Center</title>
    <link type="text/css" rel="stylesheet" href="n_admin_login.css"/>
  </head>
<body class="custom-background">
  <div id="header">
  Pace Coaching Classes
  </div>
               <br>
               <div class="centre" >
               <br><br><br>
                      <div id="title">
                          Student
                      </div>

                      <form action = "student1.php" method ="POST" class="enter">

                      <br> <br>
                      <input type="text" id="userName" name= "Login_ID" placeholder="Student ID" />
                      <br> <br>
                      <input type="password" id="userPassword" name= "Password" placeholder="Password" maxlength="20">
                      <br>
                      <br>
                         <input type="submit" id="enter" name="submit" value="Login" />
                      </form>
                      <br>
<?php
require 'connect.inc.php';
session_start();

if(isset($_POST['Login_ID'])&&!empty($_POST['Password']))
{
	$Login_ID = $_POST["Login_ID"];
	$Password = $_POST["Password"];
	{
		    mysqli_select_db($conn,'a_database');
        $sql = "SELECT * FROM `login_master` WHERE `Login_ID` = '$Login_ID' AND `password` = '$Password'";
           $result = $conn->query($sql);
           if($result->num_rows == 0)
	           {
		        header("Location:n_student_login.htm");
	           }
                else
	           {
		        echo "Login successful!";

		        header("Location:n_student_homepage.htm");

	          }
$_SESSION["Login_ID"] = $Login_ID;
	   }

}

?>    <br>

</div>
               <div  style="text-align: center; line-size: 12px;">
                     <h2>Login to proceed</h2>
		     <h3 style="color: #000000; text-align: center;" ><a href="index.php" >Go back</a></h3>
                </div>
                 <br>

                 </body>
</html>
