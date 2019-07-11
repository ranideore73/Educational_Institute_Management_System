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

<FORM action = "update_exam2.php" method = "POST" class="list1">
Enter Exam Name :
<select name = "Exam_Name" >
 <option type=button value="Major_Test1" class="">Major Test 1</option>
 <option type=button value="Major_Test2" class="">Major Test2</option>
</select>
<br><br>
Enter Date Of Examination : <input type = "text" name = "Date" ><br><br>
Enter Day :
<select name = "Day" >
 <option type=button value="Monday" class="">Monday</option>
 <option type=button value="Tuesday" class="">Tuesday</option>
 <option type=button value="Wednesday" class="">Wednesday</option>
 <option type=button value="Thursday" class="">Thursday</option>
 <option type=button value="Friday" class="">Friday</option>
 <option type=button value="Saturday" class="">Saturday</option>
 <option type=button value="Sunday" class="">Sunday</option>
</select>
<br><br>
Enter Timeslot :
<select name = "Time" >
 <option type=button value="08:00-11:00" class="">08:00-11:00</option>
 <option type=button value="11:00-02:00" class="">11:00-02:00</option>
 <option type=button value="02:00-05:00" class="">02:00-05:00</option>
 <option type=button value="05:00-08:00" class="">05:00-08:00</option>
 </select>
 <br><br>
 Enter Classroom :

 <select name="Classroom" >
	  <option type=button value="A001" class="">A001</option>
	  <option type=button value="A002" class="">A002</option>
	  <option type=button value="M001" class="">M001</option>
	  <option type=button value="M002" class="">M002</option>
	  <option type=button value="F001" class="">F001</option>
	  <option type=button value="F002" class="">F002</option>
	  <option type=button value="D001" class="">D001</option>
	  <option type=button value="D002" class="">D002</option>
    </select>
 <br><br>

Enter Course :
<select name="Course" >

	  <option type=button value="Advanced" class="">Advanced Batch</option>
	  <option type=button value="Mains" class="">JEE Mains Batch </option>
	  <option type=button value="Medical" class="">Medical Batch </option>
	  <option type=button value="Foundation" class="">Foundation Builder </option>
    </select>
	<br><br>
Enter Topics :
<input type = "text" name = "Topics"  >
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