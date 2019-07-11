<?php

$mysql_host = 'localhost';
$mysql_user ='root';
$mysql_pass = '';
$mysql_database = 'a_database';
$conn_error = "could not connect";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
if(@!mysqli_connect($mysql_host,$mysql_user,$mysql_pass)||@!mysqli_select_db($conn,$mysql_database))
   die($conn_error);




?>