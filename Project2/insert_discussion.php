<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : insert_discussion.php
Description : Add discussion by registered user.
-->

    <?php
    session_start();
	
	 
	if (!isset($_SESSION['username'])) {
			header('http://localhost/Project2/loginproc.php');
	}
	
	include ("include/db.php");
    
	/*$title=$_POST['$t'];*/
	
	$dtitle = $_POST['postdtitle'];
    $tuser = $_SESSION['username'];
    mysql_query("INSERT INTO title_table(title, t_username)VALUES('$dtitle', '$tuser')");	//SQL query for inserting the data to the table
    header("location: securedpage.php");
    mysql_close($connection);
    ?>