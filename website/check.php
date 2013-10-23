<?php
if(isset($_POST['registration']))
{
$name = "login_user";
$pas = "a1b2c3d4";
$dbname = "login";
$email = $_POST['email'];

list($user,$domain) = explode('@', $email);

if ($domain == 'mst.edu' || $domain == 'mail.mst.edu')
{
$con = mysql_connect("localhost",$name,$pas);
mysql_select_db($dbname,$con); 

$username = strip_tags($_POST['username']);
$password = SHA1(strip_tags($_POST['password']));

mysql_query("INSERT INTO members(username,password,email) VALUES ('$username','$password','$email')") 
	or  die("".mysql_error());

echo "Successful Registration! Redirecting to the Profile Creation";
header("location:student_profile_one.php#check=create");
}
else
{
	echo('Invalid Email, Must Have mst.edu or mail.mst.edu email to register.');
	header("location:register.php?register=fail");
	}
}
?>