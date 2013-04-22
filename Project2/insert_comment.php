<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : insert_comment.php
Description : add comment to the discussion.
-->

    <?php
    session_start();
	
	if (!isset($_SESSION['$t'])) {
        header('http://localhost/Project2/securedpage.php');
	}	


 
	if (!isset($_SESSION['username'])) {
        header('http://localhost/Project2/loginproc.php');
	}
	
	include ("include/db.php");
    
	$comment=$_POST['postcomment'];
	/*$title=$_POST['$t'];*/
	
	$title = $_POST['posttitle'];
    $cuser = $_SESSION['username'];
    mysql_query("INSERT INTO comment_table(title, comments, c_username)VALUES('$title','$comment','$cuser')");
    header("location: securedpage.php");
    mysql_close($connection);
    ?>