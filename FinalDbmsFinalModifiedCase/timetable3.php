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
                        </div>
						<br><br>
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
                <div id="matter" >
                                  <br><br>
<?php
require "connect.inc.php";
session_start();
 $_SESSION["Choice"];

@ $_SESSION["Time_slot"] =@$_POST["Time_slot"];
?>

     <form action = "timetable4.php " method = "POST" class="list1">
	 <select name="Classroom" >
	  <option type=button class="" selected>Classroom</option>
	  <option type=button value="A001" class="">A001</option>
	  <option type=button value="A002" class="">A002</option>
	  <option type=button value="M001" class="">M001</option>
	  <option type=button value="M002" class="">M002</option>
	  <option type=button value="F001" class="">F001</option>
	  <option type=button value="F002" class="">F002</option>
	  <option type=button value="D001" class="">D001</option>
	  <option type=button value="D002" class="">D002</option>
    </select>                 <br> <br>

	<select name="Batch_ID" >
	  <option type=button class="" selected>Batch_ID</option>
	  <option type=button value="A01" class="">Advanced Batch A01</option>
	  <option type=button value="A02" class="">Advanced Batch A02</option>
	  <option type=button value="A03" class="">Advanced Batch A03</option>
	  <option type=button value="M01" class="">Mains Batch M01</option>
	  <option type=button value="M02" class="">Mains Batch M02</option>
	  <option type=button value="M03" class="">Mains Batch M03</option>
	  <option type=button value="D01" class="">Medical Batch D01</option>
	  <option type=button value="D02" class="">Medical Batch D02</option>
	  <option type=button value="D03" class="">Medical Batch D03</option>
	  <option type=button value="F01" class="">Foundation Builder F01</option>
	  <option type=button value="F02" class="">Foundation Builder F02</option>
	  <option type=button value="F03" class="">Foundation Builder F03</option>
    </select>             <br><br>
	<select name="Subject" >
	  <option type=button class="" selected>Subject</option>
	  <option type=button value="Mathematics" class="">Mathematics</option>
	  <option type=button value="Physics" class="">Physics</option>
	  <option type=button value="Chemistry" class="">Chemistry</option>
	  <option type=button value="Biology" class="">Biology</option>
    </select>         <br><br>
	<select name="Faculty" >
	  <option type=button class="" selected>Faculty</option>
	  <option type=button value="Aakash" class="">Aakash Sir</option>
	  <option type=button value="Rohit" class="">Rohit Sir</option>
	  <option type=button value="Anushri" class="">Anushri Maam</option>
	  <option type=button value="Shivam" class="">Shivam Sir</option>
    </select>     <br> <br>
	 <input type = "submit" name = "submit" value = "submit" >
	</form>
		</div>
	<div id="footer"> <br>
	 <p class="quote">" Man is still the most extraordinary computer of all. "</p>
                        <p class="quote1">- John F. Kennedy </p>
                        </div>

	</body>
</html>