<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : edit_profile.php
Description : To update logined profile.
-->
<?php
 
	session_start();
	 
	if (!isset($_SESSION['username'])) {
			header('http://localhost/Project2/loginproc.php');
	}
	 
	if (isset($_SESSION['connection'])) {
			header('http://localhost/Project2/Logout.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
			TECH Forum
        </title>
        <link rel="stylesheet" href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="css/themes/my-theme.css" />
        <script src="https://s3.amazonaws.com/codiqa-cdn/jquery-1.7.2.min.js">
        </script>
        <script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand+SC' rel='stylesheet' type='text/css' />
        <script src="js/validation.js">
		</script>
		
		<script src="js/validation.js">
		
		</script>
		
    </head>
 <body>
		<div data-role="page" id="EditProfile">
            <div data-theme="a" data-role="header">
                <h3>
                    TECH Forum
                </h3>
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="Index.php" data-transition="fade" data-theme="a" data-icon="back">
                                Back
                            </a>
                        </li>
                        <li>
                            <a href="#EditProfile" data-transition="fade" data-theme="a" data-icon="">
                                Edit Profile
							</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="content" align="center">
			   Hello ... <b><?php echo $_SESSION['username']; ?>..
			<?php
				
				    
				include ("include/db.php");    //Database connection
				
				$result2 = mysql_query("SELECT * FROM user_table WHERE username= '".mysql_real_escape_string($_SESSION['username'])."'");
				if($row2 = mysql_fetch_array($result2))
				{
					echo ' <form name="reg" action="update_user.php" onsubmit="" method="post">
					<table>
						<tr>
							<td><label for="Username">*User Name :</label></td>
							<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="User Name is required" id="user_name1" name="user_name1" placeholder="User Name" type="text" value="'.$row2['username'].'" /></td>
						</tr>
						<tr>
							<td><label for="email_address">*Email Addr :</label></td>
							<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="Email Address is required" id="email_address1" name="email_address1" placeholder="Email Address" type="text" value="'.$row2['email_addr'].'" /></td>
						</tr>
						<tr>
							<td><label for="confirm_email_address">*Confirm Email Addr :</label></td>
							<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="Email Address is required" id="confirm_email_address1" name="confirm_email_address1" placeholder="Confirm Email Address" type="text" value="'.$row2['c_email_addr'].'" /></td>
						</tr>
						<tr>
							<td><label for="password">*Password :</label></td>
							<td><input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Password is required" id="password1" name="password1" placeholder="Password" type="password" value="'.$row2['password'].'" /></td>
						</tr>
						<tr>
							<td><label for="confirm_password">*Confirm Password :</label></td>
							<td><input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Confirm Password is required" id="confirm_password1" name="confirm_password1" placeholder="Confirm Password" type="password" value="'.$row2['c_password'].'" /></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input data-inline="true" data-theme="d"  type="submit" name="submit" id="submit" value="Submit">		<!--submit button-->
								<input data-inline="true" data-theme="d"  type="reset" name="reset" id="reset" value="Reset">		<!--reset button-->
							</td>
						</tr>
					</table>
				</form>';
				}
				?>		
					
				
            </div>
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Web-Sailor @ 2013
                </h3>
            </div>
        </div>
		</body>
</html>		
		
		
			
		
<script type='text/javascript'>
				
						
	function validateForm()
	{
		var a=document.forms["reg"]["user_name"].value;
		var b=document.forms["reg"]["email_address"].value;
		var c=document.forms["reg"]["confirm_email_address"].value;
		var d=document.forms["reg"]["password"].value;
		var e=document.forms["reg"]["confirm_password"].value;

		if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
		{
		alert("All Fields must be filled out");
		return false;
		}
		else if (a==null || a=="")
		{
		alert("Username must be filled out");
		return false;
		}
		else if (b==null || b=="")
		{
		alert("Email Address must be filled out");
		return false;
		}
		else if (c==null || c=="")
		{
		alert("Confirm Email Address must be filled out");
		return false;
		}
		else if (d==null || d=="")
		{
		alert("Password must be filled out");
		return false;
		}
		else if (e==null || e=="")
		{
		alert("Confirm Password must be filled out");
		return false;
		}
		else if (b!==c)
		{
		alert("Email address and confirm email address didn't matched");
		return false;
		}
		else if (d!==e)
		{
		alert("Password and Confirm Password didn't matched");
		return false;
		}
		
		else
		{
			
			return true;
		}

	}
		
				
</script>