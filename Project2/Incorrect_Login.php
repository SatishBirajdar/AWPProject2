<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : Incorrect_Login.php
Description : This is displayed for incorrect login.
-->


<?php
 
	if (isset($_SESSION['username'])) {
        header('http://localhost/Assignment3_mobile/securedpage.php');		//maintain session between pages
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
        <title>
			Incorrect Login
        </title>
        <link rel="stylesheet" href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="https://s3.amazonaws.com/codiqa-cdn/jquery-1.7.2.min.js">
        </script>
        <script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        
        
    </head>
    <body>
        
		   <div data-role="page" id="Incorrect_Login">
            <div data-theme="a" data-role="header">
                <h3>
                    TECH Forum
                </h3>
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#Home" data-transition="fade" data-theme="a" data-icon="back">
                                Back
                            </a>
                        </li>
                        <li>
                            <a href="#Login" data-transition="fade" data-theme="a" data-icon="">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
			<form method="POST" action="loginproc.php">				<!--Login Form-->
				
					<div data-role="content" align="center" > 
						<table>
						<tr>
								<td><label for="email_address">Email Adr:</label></td>
								<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="Email Address is required" id="email_address" name="email_address" placeholder="Email Address" type="text" value="" /></td>							
						</tr>
						<tr>						
								<td><label for="password">Password:</label></td>
								<td><input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Password is required" id="password" name="password" placeholder="Password" type="password" value="" /></td>						
						</tr>
						<tr><td colspan="2" align="center"><font color="Red">Incorrect Login !!!</font></td></tr>
						<tr>
						<td></td><td><input data-inline="true" data-theme="d"  type="submit" value="Login">		<!--submit button-->
						<input data-inline="true" data-theme="d"  type="reset" value="Reset">		<!--reset button-->
						</td></tr>
						</table>
					</div>
				</form>
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Web-Sailor @ 2013
                </h3>
            </div>
        </div>

		
		
    </body>
</html>
