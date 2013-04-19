<!--
Name : Satish Birajdar
File Name : Logout.php
Description : A Mobile-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->

<?php
	session_start();	 
	unset($_SESSION['username']);										//destroy session variable
	unset($_SESSION['connection']);										//destroy session variable
	session_destroy();													//destroy session
	mysqli_close($connection);											//close mysql connection
	header('Location: http://localhost/Project2/Index.php');
?>

