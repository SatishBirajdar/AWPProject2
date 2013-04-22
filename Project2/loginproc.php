<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : loginproc.php
Description : A Mobile-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->


<?php

	session_start();
	include('config.inc');
		
		//SQL query for checking the user authentication
	$login = mysql_query("SELECT * FROM user_table WHERE (email_addr = '" . mysql_real_escape_string($_POST['email_address']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "') ");
	
	while($row = mysql_fetch_array($login))
	{
		$_SESSION['username']=$row['username'];
	}

	if (mysql_num_rows($login) == 1) 
	{
		header('Location: securedpage.php');
	}
	else 
	{  
		header('Location: Incorrect_Login.php');
	}

?>
