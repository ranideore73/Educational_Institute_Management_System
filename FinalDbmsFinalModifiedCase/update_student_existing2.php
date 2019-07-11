<!DOCTYPE HTML>
<html>
<head>
      <title>Pace Coaching Center | Administrator</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
</head>
<body class="custom-background">


<?php
require 'connect.inc.php';
$Login_ID = $_POST["Login_ID"];
$sql = "SELECT * FROM `student` WHERE `Login_ID` = '$Login_ID'";
		$query_run = mysqli_query($conn,$sql);
		if($query_run)
		{

				while($query_row = mysqli_fetch_assoc($query_run))
				{
				$First_Name = $query_row["First_Name"];
				$Fathers_Name = $query_row["Fathers_Name"];
				$Surname = $query_row["Surname"];
				$Gender = $query_row["Gender"];
				$Birthdate = $query_row["Birthdate"];
				$Phone_No = $query_row["Phone_No"];
				$Email_Id = $query_row["Email_Id"];
				$Address1 = $query_row["Address1"];
				$Area = $query_row["Area"];
				$City = $query_row["City"];
				$Pincode = $query_row["Pincode"];
				$Mothers_Name = $query_row["Mothers_Name"];
				$Mothers_No = $query_row["Mothers_No"];
				$Fathers_No = $query_row["Fathers_No"];
				$College_Name = $query_row["College_Name"];
				$SSC_Marks = $query_row["SSC_Marks"];
				$Entrance_Marks = $query_row["Entrance_Marks"];
				$Course = $query_row["Course"];
				$Batch_ID = $query_row["Batch_ID"];

				}
			}

?>

<div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_admin_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">
			<h3>Administrator</h3>
                        </div>  <br><br>
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

                        <div id="matter">

<form method="POST" class="list1" action="update_student_existing3.php" >
    Login ID : <input type = "text" name = "Login_ID" value = "<?php echo "$Login_ID" ?>">
	<br><br>
    First Name : <input type = "text" name = "First_Name" value = "<?php echo "$First_Name" ?>">
	<br><br>
    Fathers Name : <input type = "text" name = "Fathers_Name" value = "<?php echo "$Fathers_Name" ?>">
	<br><br>
    Surname : <input type = "text" name = "Surname" value = "<?php echo "$Surname" ?>">
	<br><br>
	Gender : <select name="Gender">
			<option type="button" name="F">F</option>
			<option type="button" name="M">M</option>
			</select> <br><br>

	Birthdate: <input type = "text" name = "Birthdate" value = "<?php echo "$Birthdate" ?>">
	<br><br>
	Phone No : <input type = "text" name = "Phone_No" value = "<?php echo "$Phone_No" ?>">
	<br><br>
	Email Id : <input type = "text" name = "Email_Id" value = "<?php echo "$Email_Id" ?>">
	<br><br>
	Address1 : <input type = "text" name = "Address1" value = "<?php echo "$Address1" ?>">
	<br><br>
	Area : <input type = "text" name = "Area" value = "<?php echo "$Area" ?>">
	<br><br>
	City : <input type = "text" name = "City" value = "<?php echo "$City" ?>">
	<br><br>
	Pincode : <input type = "text" name = "Pincode" value = "<?php echo "$Pincode"    ?>" >
	<br><br>
	College Name : <input type = "text" name = "College_Name" value = "<?php echo "$College_Name" ?>">
	<br><br>
	SSC Marks : <input type = "text" name = "SSC_Marks" value = "<?php echo "$SSC_Marks" ?>">
	<br><br>
	Entrance Exam Marks : <input type = "text" name = "Entrance_Marks" value = "<?php echo "$Entrance_Marks" ?>"> <br><br>
	Course choosen : <br>
	                 <input type = "radio" name = "Course"  value = "M">  JEE MAINS <br><br>
	                 <input type = "radio" name = "Course"   value = "A"> JEEADVANCED <br><br>
					 <input type = "radio" name = "Course"  value = "D"> MEDICAL<br><br>
					 <input type = "radio" name = "Course"   value = "F"> FOUNDATION BUILDER <br><br>
	Batch ID : <input type = "text" name="Batch_ID" value = "<?php echo "$Batch_ID" ?>" >

	Parent's Details <br><br>
	Father's contact : <input = "text" name = "Fathers_No" value = "<?php echo "$Fathers_No" ?>"><br><br>
	Mother's Name : <input type = "text" name = "Mothers_Name" value = "<?php echo "$Mothers_Name" ?>"> <br><br>
	Mother's Contact : <input type = "text" name = "Mothers_No" value = "<?php echo "$Mothers_No" ?>"> <br><br>

	Submit : <input type = "submit">
    </form>

    </div>
    <div id="footer">
                        <p class="quote"> Man is still the most extraordinary computer of all. </p>
                        <p class="quote1">- John F. Kennedy </p>
    </div>

	</body>
	</html>