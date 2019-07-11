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
<?php

{   require 'connect.inc.php';
	session_start();
        $Login_ID = $_POST["Login_ID"]; 
	  
        $Course = $_SESSION["Course"];
		$Exam_Name = $_SESSION["Exam_Name"];
		$Biology = "0";
		if($Course == "Medical")
		{
			$Biology = $_POST["Biology"];
		}
        $Physics = $_POST["Physics"];
		$Chemistry = $_POST["Chemistry"];
		$Mathematics = $_POST["Mathematics"];
		$Total = $Physics + $Chemistry + $Mathematics;
		echo $sql = "INSERT INTO `result` (`Login_ID`, `Course`, `Exam_Name`, `Physics`, `Chemistry`, `Biology`, `Mathematics`, `Total`)
		VALUES ('$Login_ID', '$Course', '$Exam_Name', '$Physics', '$Chemistry', '$Biology', '$Mathematics','$Total')";
        
		if(mysqli_query($conn,$sql))
		{
		header("Location:update_result1.php");
        }
		else "Couldnt Update";
}
?>
   </div>

	<div id="footer">
	 <br>
         <p class="quote">" Man is still the most extraordinary computer of all. "</p>
                        <p class="quote1">- John F. Kennedy </p>
                        </div>
	</body>
</html>