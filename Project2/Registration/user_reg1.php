

    <?php
    session_start();
	include ("include/db.php");
    
	$user_name=$_POST['user_name'];
    $email_address=$_POST['email_address'];
    $confirm_email_address=$_POST['confirm_email_address'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    
    mysql_query("INSERT INTO member(username, email_addr, c_email_addr, password, c_password)VALUES('$user_name', '$email_address', '$confirm_email_address', '$password', '$confirm_password')");
    header("location: index.php?remarks=success");
    mysql_close($connection);
    ?>