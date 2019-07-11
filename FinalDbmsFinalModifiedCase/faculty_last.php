<!DOCTYPE HTML>
<html>
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
                        </div>  <br><br>
                        <div id="transaction">
                        <br><br><br>  <br><br>
                             <form action="faculty_profile.php" >
                             <input type=button name="profile" class="list" value= "View Profile" onclick = "self.location='faculty_profile.php' " /><br><br>
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
session_start();

require 'connect.inc.php';


$Login_ID = $_SESSION["Login_ID"];
$Choice = $_SESSION["Choice"];
echo $Choice." : ";

$query = "SELECT `First_Name` FROM `faculty` WHERE `Login_ID`= '$Login_ID' ";
$query_run = mysqli_query($conn,$query);
if(!mysqli_query($conn,$query))
{
	echo "Required information is unavailable<br>";
}
else {
	while($query_row = mysqli_fetch_assoc($query_run))
				{
					$Name = $query_row['First_Name'];
				}
	$sql = "";
if($Choice == "Week")
{
$sql = "SELECT * FROM `timetable` WHERE `Faculty`= '$Name' ";
}
if($Choice == "Day")
{
	$Day = $_POST["Day"];

	$sql = "SELECT * FROM `timetable` WHERE `Faculty` = '$Name' && `Day` = '$Day'";
}
if($Choice == "Batch")
{
	$Batch_ID = $_POST["Batch_ID"];
	echo " ".$Batch_ID."<br>";
	$sql = "SELECT * FROM `timetable` WHERE `Faculty` = '$Name' && `Batch_ID` = '$Batch_ID'";
}

$query_run1 = mysqli_query($conn,$sql);
echo mysqli_error($conn);
		if($query_run1)
		{
			if(mysqli_num_rows($query_run1)==NULL)
			  {
				  echo "<br><br><h2 style='font-weight: bold; '>Holiday!<br>";
			  }
			else
			{
				while($query_row1 = mysqli_fetch_assoc($query_run1))
				{
					$Day = $query_row1['Day'];
					$Batch_ID = $query_row1['Batch_ID'];
					$Classroom = $query_row1['Classroom'];
					$Time = $query_row1['Time'];

					echo "Day : ".$Day."<br>";
					echo "Batch_ID : ".$Batch_ID."<br>";
					echo "Classroom : ".$Classroom."<br>";
					echo "Time : ".$Time."<br><br>";
				}
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
