<!DOCTYPE html>
<html>
  <head>
    <title>Pace Coaching Center | Student</title>
    <link type="text/css" rel="stylesheet" href="n_admin_2.css"/>
  </head>
  <body class="custom-background">
  <div id="navbar" >
    			           <input type=button id="home" value="Home" onclick="self.location='n_student_homepage.htm'" />
    			           <input type=button id="logout" value="Logout" onclick="self.location='logout.php'" />
			</div>
			<div id="header1">

			<h3>Student</h3>
                        </div> <br><br>
                        <div id="transaction">
                        <br>  <br>
                             <input type=button name="profile" class="list" value= "View Profile" onclick="self.location='student_profile.php'"/>    <br> <br>
                             <input type=button name="timetable" class="list" value= "View Regular Timetable" onclick="self.location='student_timetable1.php'"/>    <br> <br>
                             <input type=button name="result" class="list" value= "View Result" onclick="self.location='result_student.php'"/>    <br> <br>
                             <input type=button name="e_tt" class="list" value= "Exam Notification" onclick="self.location='student_exam1.php'"/>     <br> <br>
                             <input type=button name="books" class="list" value= "View Books" onclick="self.location='student_books1.php'" />    <br> <br>
                        </div>      <br><br>

                        <div id="matter" class="list1">

  <?php
require 'connect.inc.php';


if(isset($_GET['subject'])&&!empty($_GET['subject']))
{$subject = $_GET['subject'];
    if($subject == 'Mathematics' || $subject == 'Physics' || $subject == 'Chemistry')
	{
		$query = "SELECT * FROM `books` WHERE `Subject`='$subject'";
		$query_run = mysqli_query($conn,$query);

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
					$Name = $query_row['Name'];
					$Author = $query_row['Author'];
					$Edition = $query_row['Edition'];
					$Publication = $query_row['Publication'];

					echo "Name of the book : ".$Name."<br>";
					echo "Author : ".$Author."<br>";
					echo "Publication : ".$Publication."<br><br>";
				}
			}
		}

	}
	else
	{
		echo "enter valid choice";
	}
}


?>

</div>

<div id="footer">
        <p class="quote">Live as if you were to die tomorrow. Learn as if you were to live forever. </p>
        <p class="quote1">Gandhi </p>
</div>
</body>
</html>