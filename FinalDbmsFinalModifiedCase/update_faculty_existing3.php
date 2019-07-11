<!DOCTYPE HTML>
<html>
<head>
       <title>Pace Coaching Center | Administrator</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="custom-background">

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

                        <div id="matter" class="list1" >

<?php
require 'connect.inc.php';
/*include 'update_faculty_existing1.php';*/

$Login_ID = $_POST["Login_ID"];
$Login_IDErr = $First_NameErr = $Middle_NameErr = $SurnameErr = $BirthdateErr =  $GenderErr = $Phone_NoErr = $Email_IdErr = $Address1Err = $AreaErr = $CityErr = $PincodeErr = $SubjectErr = $QualificationErr = "";
$Login_ID = $First_Name = $Middle_Name =$Surname = $Birthdate = $Gender = $Phone_No = $Email_Id = $Address1 = $Area = $City = $Pincode = $Subject = $Qualification = $Teaching_exp = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
  {

  if (empty($_POST["Login_ID"])) {
    $Login_IDErr = "Login_ID is required";
  } else {
    $Login_ID = test_input($_POST["Login_ID"]);
  }

	if (empty($_POST["First_Name"])) {
    $First_NameErr = "Name is required";
  } else {
    $First_Name = test_input($_POST["First_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$First_Name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["Middle_Name"])) {
    $Middle_NameErr = "";
  } else {
    $Middle_Name = test_input($_POST["Middle_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$Middle_Name)) {
      $Middle_NameErr = "Only letters allowed";
    }
  }

  if (empty($_POST["Surname"])) {
    $SurnameErr = "";
  } else {
    $Surname = test_input($_POST["Surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$Surname)) {
      $SurnameErr = "Only letters allowed";
    }
  }


  if (empty($_POST["Birthdate"])) {
    $BirthdateErr = "Birtdate is required";
  } else {
    $Birthdate = $_POST["Birthdate"];
  }

  $Gender = test_input($_POST["Gender"]);

  if (empty($_POST["Phone_No"])) {
    $Phone_NoErr = "Phone number is required";
  } else {
    $Phone_No = test_input($_POST["Phone_No"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$Phone_No)) {
      $Phone_NoErr = "Only numbers are allowed";
    }
  }

  if (empty($_POST["Email_Id"])) {
    $Email_IdErr = "Email is required";
  } else {
    $Email_Id = test_input($_POST["Email_Id"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email_Id, FILTER_VALIDATE_EMAIL)) {
      $Email_IdErr = "Invalid email format";
    }
  }

   if(empty($_POST["Address1"])) {
	   $Address1Err = "Address is required";
   }
   else {
	   $Address1 = test_input($_POST["Address1"]);
   }


   if(empty($_POST["Area"])) {
	   $AreaErr = "Area is required";
   }
   else {
	   $Area = test_input($_POST["Area"]);
   }


   if(empty($_POST["City"])) {
	   $CityErr = "Name of the City is required";
   }
   else {
	   $City = test_input($_POST["City"]);
   }


   if (empty($_POST["Pincode"])) {
    $PincodeErr = "Pincode is required";
  } else {
    $Pincode = test_input($_POST["Pincode"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$Pincode)) {
      $Pincode = "Only numbers are allowed";
    }
  }
   if(empty($_POST["Subject"])) {
	   $SubectErr = "Subject is required";
   }
   else {
	   $Subject = test_input($_POST["Subject"]);
   }



	if (empty($_POST["Qualification"])) {
    $QualificationErr = "Qualification is required";
  } else {
    $Qualification = test_input($_POST["Qualification"]);
  }

	$Teachnig_exp = test_input($_POST["Teaching_exp"]);


}
 function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
return $data;
  }



$query = "UPDATE `faculty`     SET `First_Name` = '$First_Name', `Surname` = '$Surname', `Gender` = '$Gender' ,   `Birthdate`='$Birthdate',
 `Address1` = '$Address1', `Phone_No` = '$Phone_No', `Area` = '$Area', `City` = '$City', `Pincode` = '$Pincode',  `Middle_Name` = '$Middle_Name',
 `Email_Id` = '$Email_Id', `Subject` = '$Subject', `Qualification` = '$Qualification', `Teaching_exp`= '$Teaching_exp'
 WHERE `Login_ID` = '$Login_ID' ";

if(mysqli_query($conn,$query))
		{
			echo "Updated! <br>";
			header("Location:n_admin_homepage.htm");
		}
 else echo "Error: " . mysqli_error($conn);
?>
</div>
    <div id="footer">
                        <p class="quote"> Man is still the most extraordinary computer of all. </p>
                        <p class="quote1">- John F. Kennedy </p>
    </div>
</body>
</html>
