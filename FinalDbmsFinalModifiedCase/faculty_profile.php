<!DOCTYPE html>
<html>
<?php
session_start();
?>
	<head>
              <title>Pace Coaching Center | Faculty</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
	</head>
	<body class="custom-background">

	<div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_faculty_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">
			<h3>Faculty</h3>
                        </div>
                        <br><br>
                        <div id="transaction">
                        <br><br><br>  <br><br>
                             <form action="faculty_profile.php" >
                             <input type=button name="profile" class="list" value= "View Profile" onclick = "self.location='faculty_profile.php' "/><br><br>
                             </form>
                             <select class="list" onchange="javascript:handleSelect(this)" >
                                  <option type=button name="timetable" value="" class="list" selected font-align="center" >View Regular Timetable</option>
                                  <option type=button name="week" value="faculty_timetable1" class="list">By Week</option>
                                  <option type=button name="day" value="faculty_timetable_day" class="list">By Day</option>
                                  <option type=button name="batch" value="faculty_timetable_batch" class="list">By Batch</option>
                             </select>
                             <script type="text/javascript">
                                    function handleSelect(elm)
                                    {
                                    window.location = elm.value+".php";
                                    }
                             </script>
                             <br><br>
                             <input type=button name="books" class="list" value= "Update Books" onclick="self.location = 'update_books.php' " />
                             <br><br>
                        </div>
                        <br><br>
                        <div id="matter" class="list1">
<?php
require 'connect.inc.php';


   $Login_ID = $_SESSION["Login_ID"];

				echo "Your Profile<br>";
				$query_profile = "SELECT * FROM `faculty` WHERE `Login_ID`='$Login_ID'";
		$query_run = mysqli_query($conn,$query_profile);

		if($query_run)
		{
			if(mysqli_num_rows($query_run)==NULL)
			  {
				  echo "No results<br>";
			  }
			else
			{
				while($query_row = mysqli_fetch_assoc($query_run))
				{
				$First_Name = $query_row["First_Name"];
				$Middle_Name = $query_row["Middle_Name"];
				$Surname = $query_row["Surname"];
				$Birthdate = $query_row["Birthdate"];
				$Gender = $query_row["Gender"];
				$Qualification = $query_row["Qualification"];
				$Teaching_Exp = $query_row["Teaching_exp"];
				$Phone_No = $query_row["Phone_No"];
				$Email_Id = $query_row["Email_Id"];
				$Address1 = $query_row["Address1"];
				$Area = $query_row["Area"];
				$City = $query_row["City"];
				$Pincode = $query_row["Pincode"];
				$Subject = $query_row["Subject"];

				echo "Name : ".$First_Name."  " . $Middle_Name."  ". $Surname."<br>";
				echo "Gender : ".$Gender."<br>";
				echo "Qualification : ".$Qualification."<br>";
				echo "Phone number : ".$Phone_No ."<br>";
				echo "Email : ".$Email_Id ."<br>";
				echo "Address: ".$Address1 ."<br>";
				echo "Area : ".$Area ."<br>";
				echo "City : ".$City ."<br>";
				echo "Pincode : ".$Pincode ."<br>";
				echo "Subject : ".$Subject ."<br>";
				echo "Teaching Experience : ".$Teaching_Exp ."  years"."<br>";


				}
			}
		}



?>
      </div>
       <div id="footer">

                        <p class="quote">It is the supreme art of the teacher to awaken joy in creative expression and knowledge.</p>
                        <p class="quote1">- Albert Einstein</p>
       </div>
	</body>
</html>




