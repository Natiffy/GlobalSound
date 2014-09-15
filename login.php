<?php
// version 1.1
ob_start();
session_start();
if (isset($_POST['password'])) // if the password is set then the  form has been submitted on login.php page
{
 include("config.php");
 $username =  mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $qstr = "SELECT * FROM login WHERE username ='$username' AND password ='$password'";

 $result = mysql_query($qstr);
 if (mysql_num_rows($result)) { 
 	session_regenerate_id();
 	$_SESSION['login_user']=$username;
 	session_write_close();
 	header('location: http://localhost/Site/home.php');
 }
 else echo "<font color=#ff0000><Center><b>**Failed Login**</b></Center></font>";
 mysql_close();
}
else echo "<font color=#ff8000><Center><b>**No login attempted**</b></Center></font>";
?>