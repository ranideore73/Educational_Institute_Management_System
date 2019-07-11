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
session_start();
require 'connect.inc.php';
?>
<form action = "try_result.php" method = "POST" class="list1">
  Select Exam :
  <select name = "Exam_Name">
 <option type=button value="Major_Test1" class="">Major Test 1</option>
 <option type=button value="Major_Test2" class="">Major Test 2</option>
</select>
<br><br>


  Select Course :
  <select name = "Course">
	  <option type=button value="Advanced" class="">Advanced Batch</option>
	  <option type=button value="Mains" class="">JEE Mains Batch </option>
	  <option type=button value="Medical" class="">Medical Batch </option>
	  <option type=button value="Foundation" class="">Foundation Builder </option>
    </select>
	<br><br>
  </select>
  <input type = "Submit" name = "Update" value = "Update">
</form>
</div>

	<div id="footer">
	 <br>
         <p class="quote">" Man is still the most extraordinary computer of all. "</p>
                        <p class="quote1">- John F. Kennedy </p>
                        </div>
	</body>
</html>