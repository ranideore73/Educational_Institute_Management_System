<!DOCTYPE html>
<html>
  <head>
    <title>Pace Coaching Center | Student</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
  </head>
  <body class="custom-background">

  <div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_student_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">
			<h3>Student</h3>
                        </div>
                        <br><br>
                        <div id="transaction">
                        <br><br>
                             <input type=button name="profile" class="list" value= "View Profile" onclick="self.location='student_profile.php'"/>    <br> <br>
                             <input type=button name="timetable" class="list" value= "View Regular Timetable" onclick="self.location='student_timetable1.php'"/>    <br> <br>
                             <input type=button name="result" class="list" value= "View Result" onclick="self.location='result_student.php'"/>    <br> <br>
                             <input type=button name="e_tt" class="list" value= "Exam Notification" onclick="self.location='student_exam1.php'"/>     <br> <br>
                             <input type=button name="books" class="list" value= "View Books" onclick="self.location='student_books1.php'" />    <br> <br>
                        </div>      <br><br>

                        <div id="matter" class="list1">
                     <?php
require 'connect.inc.php';
session_start();

   $Login_ID = $_SESSION["Login_ID"];

				echo "Your Profile:<br><br>";
				$query_profile = "SELECT * FROM `student` WHERE `Login_ID`='$Login_ID'";
		$query_run = mysqli_query($conn,$query_profile);

		if($query_run)
		{
			if($query_run->num_rows == 0)
			  {
				  echo "No results<br>";
			  }
			else
			{
				while($query_row = mysqli_fetch_assoc($query_run))
				{
				$First_Name = $query_row["First_Name"];
				$Fathers_Name = $query_row["Fathers_Name"];
				$Surname = $query_row["Surname"];
				$Birthdate = $query_row["Birthdate"];
				$Gender = $query_row["Gender"];
				$Phone_No = $query_row["Phone_No"];
				$Email_Id = $query_row["Email_Id"];
				$Address1 = $query_row["Address1"];
				$Area = $query_row["Area"];
				$City = $query_row["City"];
				$Pincode = $query_row["Pincode"];
				$Course = $query_row["Course"];
				$College_Name = $query_row["College_Name"];
				$SSC_Marks = $query_row["SSC_Marks"];
				$Entrance_Marks = $query_row["Entrance_Marks"];
				$Batch_ID = $query_row["Batch_ID"];
				$Fathers_No = $query_row["Fathers_No"];
				$Mothers_Name = $query_row["Mothers_Name"];
				$Mothers_No = $query_row["Mothers_No"];


				echo "First Name is : ".$First_Name."<br>";
				echo "Father's Name is : ".$Fathers_Name."<br>";
				echo "Surname is : ".$Surname."<br>";
				echo "Gender : ".$Gender."<br>";
				echo "Birthdate : ".$Birthdate."<br>";
				echo "Phone number : ".$Phone_No ."<br>";
				echo "Email : ".$Email_Id ."<br>";
				echo "Address: ".$Address1 ."<br>";
				echo "Area : ".$Area ."<br>";
				echo "City : ".$City ."<br>";
				echo "Pincode : ".$Pincode ."<br>";
				echo "Course : ".$Course ."<br>";
				echo "College name is : ".$College_Name ."<br>";
				echo "SSC Marks : ". $SSC_Marks ."<br>";
				echo "Entrance Marks : ".$Entrance_Marks."<br>";
				echo "Batch_ID : ".$Batch_ID."<br>";
				echo "Fathers_No : ".$Fathers_No."<br>";
				echo "Mothers_Name : ".$Mothers_Name."<br>";
				echo "Mothers_No : ".$Mothers_No."<br>";

				}
			}
		}

?>
</div>

<div id="footer">
        <p class="quote">Live as if you were to die tomorrow. Learn as if you were to live forever. </p>
        <p class="quote1">Gandhi </p>
</div>
</body>
</html>




