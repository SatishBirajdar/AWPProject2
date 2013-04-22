<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : Logout.php
Description : to break all mysql connection and destroy session.
-->

<?php
	session_start();	 
	unset($_SESSION['username']);										//destroy session variable
	unset($_SESSION['connection']);										//destroy session variable
	session_destroy();													//destroy session
	mysqli_close($connection);											//close mysql connection
	header('Location: http://localhost/Project2/Index.php');
?>

