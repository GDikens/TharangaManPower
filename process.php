<?php
	//get values passed from the form in login.php file
	$username=$_POST['user'];
	$password=$_POST['pass'];
	
	//connect to the server and select database
	$con=mysqli_connect('localhost','root','','tharangamanpower');
	
	$result=mysqli_query($con,"INSERT INTO user(username,password) VALUES('$username',$password)");

?>