<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	if(strlen($name)>0 && strlen($email)>0 && strlen($message)>0)
	{
		$time=time();
		mysqli_query($conn,"INSERT INTO users (name,email,message) VALUES('$name','$email','$message')");
		echo "<h1>Thank You !</h1>";
	}
}
?>