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
$sql = "SELECT * FROM `faculty` WHERE `Login_ID` = '$Login_ID'";
		$query_run = mysqli_query($conn,$sql);
		if($query_run)
		{

				while($query_row = mysqli_fetch_assoc($query_run))
				{
				$First_Name = $query_row["First_Name"];
				$Middle_Name = $query_row["Middle_Name"];
				$Surname = $query_row["Surname"];
				$Gender = $query_row["Gender"];
				$Birthdate = $query_row["Birthdate"];
				$Phone_No = $query_row["Phone_No"];
				$Email_Id = $query_row["Email_Id"];
				$Address1 = $query_row["Address1"];
				$Area = $query_row["Area"];
				$City = $query_row["City"];
				$Pincode = $query_row["Pincode"];
				$Subject = $query_row["Subject"];
				$Qualification = $query_row["Qualification"];
				$Teaching_exp = $query_row["Teaching_exp"];

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


<form method="POST" action="<?php echo htmlspecialchars("update_faculty_existing3.php");?>" class="list1">
    Login ID : <input type = "text" name = "Login_ID" value = "<?php echo "$Login_ID" ?>">
	<br><br>
    First Name : <input type = "text" name = "First_Name" value = "<?php echo "$First_Name" ?>">
	<br><br>
    Middle Name : <input type = "text" name = "Middle_Name" value = "<?php echo "$Middle_Name" ?>">
	<br><br>
    Surname : <input type = "text" name = "Surname" value = "<?php echo "$Surname" ?>">
	<br><br>
	Gender : <select name="Gender">
			<option type="button" name="F">F</option>
			<option type="button" name="M">M</option>
			</select>

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
	Pincode : <input type = "text" name = "Pincode" value = "<?php echo "$Pincode"?>" >
	<br><br>
	Subject : <input type = "text" name = "Subject" value = "<?php echo "$Subject" ?>">
	<br><br>
	Qualification: <input type = "text" name = "Qualification" value = "<?php echo "$Qualification" ?>">
	<br><br>
	Teaching exp : <input type = "text" name = "Teaching_exp" value = "<?php echo "$Teaching_exp" ?>"> <br><br>

	Submit : <input type = "submit">
    </form>
</div>
    <div id="footer">
                        <p class="quote"> Man is still the most extraordinary computer of all. </p>
                        <p class="quote1">- John F. Kennedy </p>
    </div>


</BODY>
</HTML>
