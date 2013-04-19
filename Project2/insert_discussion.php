

    <?php
    session_start();
	
	 
if (!isset($_SESSION['username'])) {
        header('http://localhost/Project2/loginproc.php');
}
	
	include ("include/db.php");
    
	/*$title=$_POST['$t'];*/
	
	$dtitle = $_POST['postdtitle'];
    $tuser = $_SESSION['username'];
    mysql_query("INSERT INTO title_table(title, t_username)VALUES('$dtitle', '$tuser')");
    header("location: securedpage.php");
    mysql_close($connection);
    ?>