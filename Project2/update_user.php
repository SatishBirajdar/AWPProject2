<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : update_user.php
Description : A desktop and Mobile-Specific Web Forum leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->

<?php
    session_start();
		
	 
	if (!isset($_SESSION['username'])) {
			header('http://localhost/Project2/loginproc.php');
	}
	 
	if (isset($_SESSION['connection'])) {
			header('http://localhost/Project2/Logout.php');
	}
	
	include ("include/db.php");
    
	$user_name=$_POST['user_name1'];
    $email_address=$_POST['email_address1'];
    $confirm_email_address=$_POST['confirm_email_address1'];
    $password=$_POST['password1'];
    $confirm_password=$_POST['confirm_password1'];
    mysql_query("UPDATE user_table SET username='$user_name', email_addr='$email_address', c_email_addr='$confirm_email_address', password='$password', c_password='$confirm_password'  WHERE username='".mysql_real_escape_string($_SESSION['username'])."'");
    
    header("location: securedpage.php");
    mysql_close($connection);
    ?>