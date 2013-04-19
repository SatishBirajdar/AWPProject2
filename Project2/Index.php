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
        <!-- Home -->
        <div data-role="page" id="Home">
            <div data-theme="a" data-role="header">
                <h3>
                    TECH Forum
                </h3>
                
            </div>
				<a data-role="button" data-inline="true" href="#Register" data-transition="fade" data-theme="" data-icon="">
                    Register
                </a>
                        
                <a data-role="button" data-inline="true" href="#Login" data-transition="fade" data-theme="" data-icon="">
                    Login
                </a>
			
            <div data-role="content" data-theme="a">
                
				
				<div id="D_button">
					<a data-role="button" href="#login_needed" data-rel="dialog" data-transition="slidedown" data-inline="true" data-theme="a">
						Add New Disscussion
					</a>
				</div>
				<h2>
                    Disscussions:
                </h2>
				
				
                <?php
				
				    
						try
						{
							include ("include/db.php");    //Database connection
							$result = mysql_query("SELECT * FROM title_table");  //Query for displaying Business contact details

							echo "<div data-role='collapsible-set'>";	//Collapsible display to show the contacts of Users
							while($row = mysql_fetch_array($result))
							{
								echo "<div data-role='collapsible' data-content-theme='b'>"."<h3>".$row['title']."<label style='float:right;' for='username'>by ".$row['t_username']."</label></h3><div class='gcontent'><strong>Topic: </strong> ".$row['title']."<br />";
								$t=$row['title'];
								$result1= mysql_query("SELECT * FROM comment_table a WHERE a.title='".mysql_real_escape_string($t)."'");
								echo "<table>";
								while($row1=mysql_fetch_array($result1))
								
								{
									echo "<tr><strong>Comment: </strong>".$row1['comments']."<label style='float:right;' for='username'>-> by ".$row1['c_username']."</label><br /></tr>";
									
								}
								echo "<tr><a data-role='button' data-inline='true' data-rel='dialog' href='#login_needed'>Add Comment</a></tr>";
								echo "</table></div></div><br />";
							}
							echo "</div>";
							mysql_close($connection);		//close Database connection							
						}
						catch(Exception $e)
						{
							echo $e->getMessage();
						}
				?>
				
   <!--            <div id="D_body" data-role="collapsible-set">
                    <div data-role="collapsible" data-collapsed="true">
                        <br />
						<h3>
                            I hate Java 
                        </h3>
                        <div data-role="fieldcontain">
                            <label for="textarea1">
                                Title
                            </label>
                            <textarea name="" id="textarea1" placeholder="">
                            </textarea>
                        </div>
                        <a data-role="button" href="#page1">
                            Add Comment
                        </a>
                        <input value="Submit" type="submit" />
                    </div>
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Section Header 2
                        </h3>
                    </div>
                </div>       -->
				
				
            </div>
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Web-Sailor @ 2013
                </h3>
            </div>
        </div>
		
		
		
		<!--   -->
		
		
		
		<div data-role="page" id="Register">
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
                            <a href="#Register data-transition="fade" data-theme="a" data-icon="">
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="content" align="center">
			   

			
                <form name="reg" action="user_reg.php" onsubmit="return validateForm()" method="post">
				<table>
					<tr>
						<td><label for="email_address">*User Name :</label></td>
						<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="User Name is required" id="user_name" name="user_name" placeholder="User Name" type="text" value="" /></td>
					</tr>
					<tr>
						<td><label for="email_address">*Email Addr :</label></td>
						<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="Email Address is required" id="email_address" name="email_address" placeholder="Email Address" type="text" value="" /></td>
					</tr>
					<tr>
						<td><label for="email_address">*Confirm Email Addr :</label></td>
						<td><input data-autosuggest-max-length="15" data-val="true" data-val-length-max="30" data-val-length-min="3" data-val-required="Email Address is required" id="confirm_email_address" name="confirm_email_address" placeholder="Confirm Email Address" type="text" value="" /></td>
					</tr>
					<tr>
						<td><label for="password">*Password :</label></td>
						<td><input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Password is required" id="password" name="password" placeholder="Password" type="password" value="" /></td>
					</tr>
					<tr>
						<td><label for="password">*Confirm Password :</label></td>
						<td><input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Confirm Password is required" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" value="" /></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input data-inline="true" data-theme="d"  type="submit" value="Submit">		<!--submit button-->
							<input data-inline="true" data-theme="d"  type="reset" value="Reset">		<!--reset button-->
						</td>
					</tr>
				</table>
				</form>
				
            </div>
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Web-Sailor @ 2013
                </h3>
            </div>
        </div>
		
		<!--      -->
		
		        <div data-role="page" id="Login">
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

		
		
		       
		
		<!---->
		<div data-role="page" id="login_needed">
		  <div data-role="content"> 
			<table align="center">
			<tr>
				Sorry!!! Authentication Needed !!! </tr>
			<tr> <td>
			<a data-role="button" data-inline="true" href="#Login" data-transition="fade" data-theme="a" data-icon="">
                    Login
                </a></td><td>	
			<a data-role="button" data-inline="true" href="#Home" data-transition="fade" data-theme="a" data-icon="">
                    Close
                </a></td></tr>
			</table>
			
			
		  </div>
		</div>
		
		
		
    </body>
</html>
