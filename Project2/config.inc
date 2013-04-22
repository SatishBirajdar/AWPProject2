
<?php

$hostname = 'localhost';        
$dbname   = 'db200234918'; 
$username = 'db200234918';             
$password = '13126';                 


mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

mysql_select_db($dbname) or DIE('Database name is not available!');

?>
