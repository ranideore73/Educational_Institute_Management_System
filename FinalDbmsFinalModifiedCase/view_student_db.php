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
                             <input type=button name="result" class="list" value= "Update Result" onclick="self.location = 'update_result1.php' " />
                             <script type="text/javascript">
                                    function handleSelect(elm)
                                    {
                                    window.location = elm.value+".php";
                                    }
                             </script>
                        </div>
						<div id="matter" class="list1">
<?php
require 'connect.inc.php';
$sql = "SELECT * FROM `student` WHERE 1";
$query_run = mysqli_query($conn,$sql);
    if($query_run)
		{
			if(mysqli_num_rows($query_run)==NULL)
			  {
				  echo "No results<br>";
			  }
			else
			{
				while($query_row = mysqli_fetch_assoc($query_run))
				{	$Login_ID = $query_row['Login_ID'];
					$First_Name = $query_row['First_Name'];
					$Surname = $query_row['Surname'];
					$College_Name = $query_row['College_Name'];
					$SSC_Marks = $query_row['SSC_Marks'];
					$Course = $query_row['Course'];
					$Batch_Id = $query_row['Batch_ID'];
				    $Phone_No = $query_row['Phone_No'];
					$Email_Id = $query_row['Email_Id'];
					$Fathers_Name = $query_row['Fathers_Name'];

					$Parents_Contact = $query_row['Fathers_No'];

				echo "Login_ID : ".$Login_ID."<br>";
				echo "Name : ".$First_Name."  ".$Fathers_Name."  ".$Surname."<br>";
				echo "Phone Number : ".$Phone_No."<br>";
				echo "Email_Id : ".$Email_Id."<br>";
				echo "College Name: ".$College_Name."<br>";
				echo "SSC marks : ".$SSC_Marks."<br>";
				echo "Course : ".$Course."<br>";
				echo "Batch Id : ".$Batch_Id."<br>"."<br><br>";



				}
			}
		}


?>

</div>
    <div id="footer">
                        <p class="quote"> Man is still the most extraordinary computer of all. </p>
                        <p class="quote1">- John F. Kennedy </p>
    </div>

</body>
</html>