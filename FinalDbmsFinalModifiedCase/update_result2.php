<!DOCTYPE html>
<html>
  <head>
    <title>Pace Coaching Center | Administrator</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
  </head>
  <body class="custom-background">

<div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_admin_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">
			<h3>Administrator</h3>
                        </div><br><br>
                        <div id="transaction">
                      <br><br> <input type=button name="student_profile" class="list" value= "View all Students" onclick="self.location = 'view_student_db.php' " /><br><br>
						          <input type=button name="faculty_profile" class="list" value= "View all Faculties" onclick="self.location = 'view_faculty_db.php' " /><br><br>
                             <select class="list" onchange="javascript:handleSelect(this)" >
                                  <option type=button name="us_profile" value="" class="list" selected font-align="center" >Update Student Profile</option>
                                  <option type=button name="add_s" value="update_student_new" class="list">Add New Student</option>
                                  <option type=button name="update_s" value="update_student_existing1" class="list">Update Existing Student</option>
                                  <option type=button name="delete_s" value="delete_student1" class="list">Delete Student</option>
                             </select>
                             <br><br>
                             <select class="list" onchange="javascript:handleSelect(this)" >
                                  <option type=button name="uf_profile" value="" class="list" selected font-align="center" >Update Faculty Profile</option>
                                  <option type=button name="add_f" value="update_faculty_new" class="list">Add New Faculty</option>
                                  <option type=button name="update_f" value="update_faculty_existing1" class="list">Update Existing Faculty</option>
                                  <option type=button name="delete_f" value="delete_faculty1" class="list">Delete Faculty</option>
                             </select>
                             <br><br>
                              <select class="list" onchange="javascript:handleSelect(this)" >
                                  <option type=button name="timetable" value="" class="list" selected font-align="center" >Update Timetable</option>
                                  <option type=button name="regular_t" value="timetable1" class="list"> Regular Lecture Timetable</option>
                                  <option type=button name="exam_t" value="update_exam1" class="list">Exam Timetable</option>
                             </select>  <br><br>
                             <input type=button name="result" class="list" value= "Update Result" onclick="self.location = 'update_result1.php' " /><br><br>
                             <script type="text/javascript">
                                    function handleSelect(elm)
                                    {
                                    window.location = elm.value+".php";
                                    }
                             </script>
                        </div>    <br><br>
                <div id="matter" >  <br><br>

<form method = "POST" action = "update_result3.php" class="list1">
<?php
session_start();
require 'connect.inc.php';
$_SESSION["Course"] = $_POST["Course"];
$_SESSION["Exam_Name"] = $_POST["Exam_Name"];

$Course = $_POST["Course"];

$query = "SELECT `Login_ID` FROM `student` WHERE `Course`= '$Course' ";
$query_run = mysqli_query($conn,$query);

if($query_run)
{   echo "Enter the Marks of the Student";
	echo "<br><br>";
	while($query_row = mysqli_fetch_assoc($query_run))
	{
		$Login_ID = $query_row["Login_ID"];


		echo $Login_ID ."    :    ";   echo "<br>";
		echo "<input type = 'text' placeholder='Physics' name = 'Physics' > "; echo "<br>";
		echo "<input type = 'text' placeholder='Chemistry' name = 'Chemistry'>";  echo "<br>";
		echo "<input type = 'text' placeholder='Mathematics' name = 'Mathematics'>"; echo "<br>";
		if($Course == "Medical")
		{
			echo "<input type = 'text'  placeholder='Biology' name = 'Biology'>"; echo "<br>";

		}

       echo "<input type = 'Submit' name = 'Submit' value = 'Enter' >"; echo "<br>";
	   echo "<br><br>";

	}
}

else echo "Couldnt process the request<br>";
?>
</form>
</div>

	<div id="footer">
	 <br>
         <p class="quote">" Man is still the most extraordinary computer of all. "</p>
                        <p class="quote1">- John F. Kennedy </p>
                        </div>
	</body>
</html>