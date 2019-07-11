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
$Login_ID = $_SESSION["Login_ID"];
require 'connect.inc.php';

$Exam_Name = $_POST["Exam"];

$query = "SELECT `Course` FROM `student` WHERE `Login_ID` = '$Login_ID'";

$query_run = mysqli_query($conn,$query);
if($query_run)
{
	if(mysqli_num_rows($query_run)==NULL)
	{
		echo "No results<br>";
	}
	else
	{
		while($query_row = mysqli_fetch_assoc($query_run))
		{
			$Course = $query_row["Course"];
		}
	}
	
	$query1 = "SELECT * FROM `result` WHERE `Login_ID` = '$Login_ID' AND `Exam_Name` = '$Exam_Name'";
	$query_run1 = mysqli_query($conn,$query1);
	if($query_run1)
	{
		if(mysqli_num_rows($query_run1)==NULL)
	{
		echo "No results<br>";
	}
	else
	{
		while($query_row1 = mysqli_fetch_assoc($query_run1))
		{
			$Physics = $query_row1["Physics"];
			$Chemistry = $query_row1["Chemistry"];
			$Mathematics = $query_row1["Mathematics"];
			if($Course == "Medical")
			{
				$Biology = $query_row1["Biology"];
			}
			
			$Total = $query_row1["Total"];
			if($Course == "Medical")
			{
				$Average = $Total/4;
			}
			else $Average = $Total/3;
			$Exam_Name = $query_row1["Exam_Name"];
			echo "Exam  Name : ".$Exam_Name."<br>";
			echo "Physics Marks  : ".$Physics."<br>";
			echo "Chemistry Marks : ".$Chemistry."<br>";
			echo "<Mathematics Marks : ".$Mathematics."<br>";
			echo "Total  : ".$Total."<br>";
			echo "Average of all the subjects : ".$Average."<br>";
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
