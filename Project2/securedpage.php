<!--
Name : Satish Birajdar
File Name : securedpage.php
Description : A Mobile-Specific Web App for my portfolio site leveraging using
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

			<div data-role="page" id="S_Home">
	
		
				<div data-theme="a" data-role="header">
					<h3>
						TECH Forum
					</h3>
					
				</div>
				
			
				<div data-role="content" data-theme="a">
					<form method=POST action="Logout.php">	
							
					<a data-role="button" data-inline="true" href="#Home" data-transition="fade" data-theme="" data-icon="" style='float:right;'">
						Logout
					</a>
					</form>	
					<p>
						Hello ... <b><?php echo $_SESSION['username']; ?>..
					</p> 
					
					
					<div id="D_button">
						<a data-role="button" href="new_discussion.php" data-rel="dialog" data-transition="slidedown" data-inline="true" data-theme="a">
							Add New Disscussion
						</a>
					</div>
					
					<h2>
						Disscussions:
					</h2>
					
					<div>
					
					
					<?php
					
						
							try
							{
								include ("include/db.php");    //Database connection
								$result = mysql_query("SELECT * FROM title_table");   //Query for displaying Business contact details

								echo "<div data-role='collapsible-set'>";	//Collapsible display to show the contacts of Users
								while($row = mysql_fetch_array($result))
								{
									echo "<div data-role='collapsible' data-content-theme='b'>"."<h3>".$row['title']."<label style='float:right;' for='username'>by ".$row['t_username']."</label></h3><div class='gcontent'><strong>Topic: </strong> <label for='title_label'>".$row['title']."</label><br />";
									
									$result1= mysql_query("SELECT * FROM comment_table a WHERE a.title='".mysql_real_escape_string($row['title'])."'");
									echo "<form name='comm' action='insert_comment.php' onsubmit='' method='post'><table>";
									$t=$row['title'];
									while($row1=mysql_fetch_array($result1))
									{
										echo "<tr><strong>Comment: </strong>".$row1['comments']."</tr><tr></tr><tr><label style='float:right;' for='username'>-> by ".$row1['c_username']."</label><br /></tr>";
										
									}
									echo "<tr><div data-role='fieldcontain'>";
									echo "<label for='comment'>Comment</label><textarea name='comment' id='comment' placeholder=''>	</textarea>	</div></tr>";
									
									/*echo "<tr><a data-role='button' id='".$t."'  data-inline='true' data-rel='dialog' onclick='AddComment(this.id,$('#comment').val())' >Add Comment</a></tr>";
									*/
									
									echo "<input data-inline='true' data-theme='d' id='".$t."' onclick='AddComment(this.id,this.form.comment.value)' type='submit' value='Add Comment'>";
									
									
									//<button id=123 type='submit' value=uniqueId545>Clear Selection</button>
									//onclick='javascript:getUniqueButtonValue($(this).val());'
									
									echo "</form></table></div></div><br />";
								}
								echo "</div>";
								
								echo "<script type='text/javascript'> 
								
								function getUniqueButtonValue(value)
								{

									alert(value);
									alert('comment '+ clicked_title);
								}
								
								function AddComment(clicked_title,comment) 
								{
									var title= clicked_title;
									var comment= comment;
									
									$.post('insert_comment.php',{posttitle:title,postcomment:comment});
									
								}</script>";
								
								mysql_close($connection);		//close Database connection		
															
							}
							catch(Exception $e)
							{
								echo $e->getMessage();
							}
					?>
					
					</div>
					
					
				</div>
				<div data-theme="a" data-role="footer" data-position="fixed">
					<h3>
						Web-Sailor @ 2013
					</h3>
				</div>
        	</div>
		
		
		
		<div data-role="page" id="login_needed">
		  <div data-role="content"> 
			<table align="center">
			<tr>
				<textarea name='newdiscussion' id='newdiscussion' placeholder=''>	</textarea> </tr>
			<tr> <td>
			<a data-role="button" data-inline="true" href="#Login" data-transition="fade" data-theme="a" data-icon="">
                    Submit
                </a></td><td>	
			<a data-role="button" data-inline="true" href="#S_Home" data-transition="fade" data-theme="a" data-icon="">
                    Close
                </a></td></tr>
			</table>
			
			
		  </div>
		</div>
		
		
	</body>

</html>




