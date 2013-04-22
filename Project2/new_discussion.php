<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : securedpage.php
Description : To add new discussion.
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

<html>

	<head>
			<!-- Start jquery mobile HEAD section -->
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<meta name="apple-mobile-web-app-capable" content="yes" />
			<meta name="apple-mobile-web-app-status-bar-style" content="black" />
			
			<title>
				Secured page
			</title>
			
			<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
			<link href='http://fonts.googleapis.com/css?family=Underdog' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
			<script src="http://code.jquery.com/jquery-1.7.2.min.js">
			</script>
			<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
			</script>
					   
	</head>

	<body>

			<div data-role="page" id="login_needed">
				  <div data-role="content"> 
					<?php
					
						echo "<form name='newdiss' action='insert_discussion.php' onsubmit='add()' method='post'>";
						echo "<table align='center'>
						<tr>
							Discussion Title :
						</tr>
						<tr>
							<textarea name='newdiscussion' id='newdiscussion'>	</textarea> </tr>
						<tr> <td>
						
						<input data-inline='true' data-theme='a' onclick='jsadd(this.form.newdiscussion.value)' type='submit' value='Post'>
								
						</td><td>	
						<a data-role='button' data-inline='true' href='securedpage.php' data-transition='fade' data-theme='a'>
								Close
						</a>
						</td></tr>
						</table>
						</form>";
						echo "<script>
						function jsadd(d_title)
						{
							var title= d_title;
									
							$.post('insert_discussion.php',{postdtitle:title});
						}
						</script>";				
						
						?>
					
					</div>
				</div>
				
	</body>
</html>