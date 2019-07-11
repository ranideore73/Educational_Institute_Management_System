<!DOCTYPE HTML>
<html>
<head>
      <title>Pace Coaching Center | Administrator</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
</head>
<body class="custom-background">
<?php
require 'connect.inc.php';

$Login_IDErr = $First_NameErr = $Fathers_NameErr = $SurnameErr = $BirthdateErr = $PincodeErr  =  $GenderErr = $Phone_NoErr = $Email_IdErr = $Address1Err = $AreaErr = $CityErr = $College_NameErr = $SSC_MarksErr = $Entrance_MarksErr = $CourseErr = $Batch_IDErr = "";
$Login_ID = $First_Name = $Fathers_Name =$Surname = $Birthdate = $Gender = $Phone_No = $Email_Id = $Address1 = $Area = $City = $Pincode = $College_Name = $SSC_Marks = $Entrance_Marks = $Course = $Batch_ID = $Fathers_No = $Mothers_Name = $Mothers_No = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
  {
	  function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
return $data;
  }


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
    if (!preg_match("/^[a-zA-Z ]*$/",$First_Name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["Fathers_Name"])) {
    $Fathers_NameErr = "";
  } else {
    $Fathers_Name = test_input($_POST["Fathers_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$Fathers_Name)) {
      $Fathers_NameErr = "Only letters allowed";
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

	   $Gender = test_input($_POST["Gender"]);

	    if (empty($_POST["Birthdate"])) {
    $BirthdateErr = "Birtdate is required";
  } else {
    $Birthdate = $_POST["Birthdate"];
  }

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
   if(empty($_POST["College_Name"])) {
	   $College_NameErr = "College Name is required";
   }
   else {
	   $College_Name = test_input($_POST["College_Name"]);
   }


   if (empty($_POST["SSC_Marks"])) {
    $SSC_MarksErr = "SSC Percentage is required";
  } else {
    $SSC_Marks = test_input($_POST["SSC_Marks"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9.]*$/",$SSC_Marks)) {
      $SSC_Marks = "Only numbers are allowed";
    }
  }

  if (empty($_POST["Entrance_Marks"])) {
    $Entrance_MarksErr = "Entrance Marks are required";
  } else {
    $Entrance_Marks = test_input($_POST["Entrance_Marks"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$Entrance_Marks)) {
      $Entrance_Marks = "Only numbers are allowed";
    }
  }

	if (empty($_POST["Course"])) {
    $CourseErr = "Course is required";
  } else {
    $Course = test_input($_POST["Course"]);
  }

	if (empty($_POST["Batch_ID"])) {
    $Batch_IDErr = "Batch_ID is required";
  } else {
    $Batch_ID = test_input($_POST["Batch_ID"]);
  }

  if (!empty($_POST["Mothers_No"])) {
  $Mothers_No = test_input($_POST["Mothers_No"]);}
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$Mothers_No)) {
      $Mothers_NoErr = "Only numbers are allowed";
    }


  if (empty($_POST["Fathers_No"])) {
    $Fathers_NoErr = "Phone number is required";
  } else {
    $Fathers_No = test_input($_POST["Fathers_No"]);
    if (!preg_match("/^[0-9]*$/",$Fathers_No)) {
      $Fathers_NoErr = "Only numbers are allowed";
    }
  }

  if (empty($_POST["Mothers_Name"])) {
    $Mothers_NameErr = "Name is required";
  } else {
    $Mothers_Name = test_input($_POST["Mothers_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Surname)) {
      $Mothers_NameErr = "Only letters and white space allowed";
    }
  }
  }
?>
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
                             <input type=button name="result" class="list" value= "Update Result" onclick="self.location = 'update_result1.php' " />
                             <script type="text/javascript">
                                    function handleSelect(elm)
                                    {
                                    window.location = elm.value+".php";
                                    }
                             </script>
                        </div>
                        <div id="matter">

<BR>
    <form method="post" id="addSForm" class="list1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Login ID : <input type = "text" name = "Login_ID" value = "<?php echo "$Login_ID" ?>">
	 <span class="error">* <?php echo $Login_IDErr;?></span>
	<br><br>
    First Name : <input type = "text" name = "First_Name" value = "<?php echo "$First_Name" ?>">
	<span class="error">* <?php echo $First_NameErr;?></span>
	<br><br>
    Fathers Name : <input type = "text" name = "Fathers_Name" value = "<?php echo "$Fathers_Name" ?>">
	<span class="error">* <?php echo $Fathers_NameErr;?></span>
	<br><br>
    Surname : <input type = "text" name = "Surname" value = "<?php echo "$Surname" ?>">
	<br><br>
	Gender : <select name="Gender">
			<option type="button" name="F">F</option>
			<option type="button" name="M">M</option>
			</select>
                           <br><br>
	Birthdate: <input type = "text" name = "Birthdate" value = "<?php echo "$Birthdate" ?>">
	 <span class="error">* <?php echo $BirthdateErr;?></span>
	<br><br>
	Phone No : <input type = "text" name = "Phone_No" value = "<?php echo "$Phone_No" ?>">
	<span class="error">* <?php echo $Phone_NoErr;?> </span>
	<br><br>
	Email Id : <input type = "text" name = "Email_Id" value = "<?php echo "$Email_Id" ?>">
	<span class="error">* <?php echo $Email_IdErr;?> </span>
	<br><br>
	Address1 : <input type = "text" name = "Address1" value = "<?php echo "$Address1" ?>">
	<span class="error">* <?php echo $Address1Err;?> </span>
	<br><br>
	Area : <input type = "text" name = "Area" value = "<?php echo "$Area" ?>">
	<span class="error">* <?php echo $AreaErr;?> </span>
	<br><br>
	City : <input type = "text" name = "City" value = "<?php echo "$City" ?>">
	<span class="error">* <?php echo $CityErr;?> </span>
	<br><br>
	Pincode : <input type = "text" name = "Pincode" value = "<?php echo "$Pincode"    ?>" >
	<span class="error">* <?php echo $PincodeErr;?> </span>
	<br><br>
	College Name : <input type = "text" name = "College_Name" value = "<?php echo "$College_Name" ?>">
	<span class="error">* <?php echo $College_NameErr;?> </span>
	<br><br>
	SSC Marks : <input type = "text" name = "SSC_Marks" value = "<?php echo "$SSC_Marks" ?>">
	<span class="error">* <?php echo $SSC_MarksErr;?> </span>
	<br><br>
	Entrance Exam Marks : <input type = "text" name = "Entrance_Marks" value = "<?php echo "$Entrance_Marks" ?>">
	<span class="error">* <?php echo $Entrance_MarksErr;?> </span>
	<br><br>
	Course choosen : <br>
	                 <input type = "radio" name = "Course"  value = "M">  JEE MAINS <br><br>
	                 <input type = "radio" name = "Course"   value = "A"> JEEADVANCED <br><br>
					 <input type = "radio" name = "Course"  value = "D"> MEDICAL<br><br>
					 <input type = "radio" name = "Course"   value = "F"> FOUNDATION BUILDER <br><br>
	Batch ID : <input type = "text" name="Batch_ID" value = "<?php echo "$Batch_ID" ?>" >
         <br><br>
	Parents Details <br><br>
	Fathers contact : <input = "text" name = "Fathers_No" value = "<?php echo "$Fathers_No" ?>"><br><br>
	Mothers Name : <input type = "text" name = "Mothers_Name" value = "<?php echo "$Mothers_Name" ?>"> <br><br>
	Mothers Contact : <input type = "text" name = "Mothers_No" value = "<?php echo "$Mothers_No" ?>"> <br><br>

	Submit : <input type = "submit">
    </form>


<?php
$query = "INSERT INTO `faculty` (`Login_ID`,`First_Name`,`Fathers_Name`, `Surname`, `Gender`, `Birthdate` ,`Phone_No`, `Email_Id`, `Address1`, `Area`, `City`, `Pincode`,
`SSC_Marks`, `Entrance_Marks`, `Course`, ` Batch_ID`, `Fathers_No`, `Mothers_Name` , `Mothers_No`)
VALUES ('$Login_ID','$First_Name', '$Fathers_Name', '$Surname','$Gender', '$Birthdate','$Phone_No', '$Email_Id', '$Address1', '$Area', '$City', '$Pincode', '$SSC_Marks',
'$Entrance_Marks', '$Course', '$Batch_ID', '$Fathers_No' , '$Mothers_Name' , '$Mothers_No')";
$query_run = mysqli_query($conn,$query);
if(@mysqli_query($conn,$query))
		{
			echo "Updated<br>";
			header("Location:update_student_new.php");
		}
else echo " " ;


?>
</div>
    <div id="footer">
                        <p class="quote"> Man is still the most extraordinary computer of all. </p>
                        <p class="quote1">- John F. Kennedy </p>
    </div>

</body>
</html>
