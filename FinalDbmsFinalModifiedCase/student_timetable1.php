
<?php
session_start();
$_SESSION["Choice"] = "Week";
?>
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
                        </div>    <br><br>
                        <div id="transaction">
                        <br>  <br>
                             <input type=button name="profile" class="list" value= "View Profile" onclick="self.location='student_profile.php'"/>    <br> <br>
                             <input type=button name="timetable" class="list" value= "View Regular Timetable" onclick="self.location='student_timetable1.php'"/>    <br> <br>
                             <input type=button name="result" class="list" value= "View Result" onclick="self.location='result_student.php'"/>    <br> <br>
                             <input type=button name="e_tt" class="list" value= "Exam Notification" onclick="self.location='student_exam1.php'"/>     <br> <br>
                             <input type=button name="books" class="list" value= "View Books" onclick="self.location='student_books1.php'" />    <br> <br>
                        </div>      <br><br>

                        <div id="matter" >
<FORM class="list1">

<select font-size="22px" name = "Choice" onchange="javascript:handleSelect(this)" >
<option type=button value="" class="">Choice</option>
 <option type=button value="student_last" class="">View by Week</option>
 <option type=button value="student_timetable_day" class="">View by Day</option>

</select>
<script type="text/javascript">
                          function handleSelect(elm)
                          {
                          window.location = elm.value+".php";
                          }
                          </script>
<br><br>

</form>

</div>

<div id="footer">
        <p class="quote">Live as if you were to die tomorrow. Learn as if you were to live forever. </p>
        <p class="quote1">Gandhi </p>
</div>
</body>
</html>
