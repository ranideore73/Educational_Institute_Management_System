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
                        </div> <br><br>
                        <div id="transaction">
                        <br>  <br>
                             <input type=button name="profile" class="list" value= "View Profile" onclick="self.location='student_profile.php'"/>    <br> <br>
                             <input type=button name="timetable" class="list" value= "View Regular Timetable" onclick="self.location='student_timetable1.php'"/>    <br> <br>
                             <input type=button name="result" class="list" value= "View Result" onclick="self.location='result_student.php'"/>    <br> <br>
                             <input type=button name="e_tt" class="list" value= "Exam Notification" onclick="self.location='student_exam1.php'"/>     <br> <br>
                             <input type=button name="books" class="list" value= "View Books" onclick="self.location='student_books1.php'" />    <br> <br>
                        </div>      <br><br>

                        <div id="matter" class="list1">
<?php
session_start();

require 'connect.inc.php';


$Login_ID = $_SESSION["Login_ID"];
$Choice = $_SESSION["Choice"];

$query = "SELECT `Batch_ID` FROM `student` WHERE `Login_ID`= '$Login_ID' ";
$query_run = mysqli_query($conn,$query);
if(!mysqli_query($conn,$query))
{
	echo "Required information is unavailable<br>";
}
else {
	while($query_row = mysqli_fetch_assoc($query_run))
				{
					$Batch_no = $query_row['Batch_ID'];
				}
	$sql = "";
if($Choice == "Week")
{
$sql = "SELECT * FROM `timetable` WHERE `Batch_ID`= '$Batch_no' ";
}
if($Choice == "Day")
{
	$Day = $_POST["Day"];
	$sql = "SELECT * FROM `timetable` WHERE `Batch_ID` = '$Batch_no' && `Day` = '$Day'";
}

$query_run1 = mysqli_query($conn,$sql);
echo mysqli_error($conn);
		if($query_run1)
		{
			if(mysqli_num_rows($query_run1)==NULL)
			  {
				  echo "No results<br>";
			  }
			else
			{
				while($query_row = mysqli_fetch_assoc($query_run1))
				{
					$Day = $query_row['Day'];
					$Faculty_Name = $query_row['Faculty'];
					$Classroom = $query_row['Classroom'];
					$Time = $query_row['Time'];

					echo "Day : ".$Day."<br>";
					echo "Faculty_Name : ".$Faculty_Name."<br>";
					echo "Classroom : ".$Classroom."<br>";
					echo "Time : ".$Time."<br><br>";
				}
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