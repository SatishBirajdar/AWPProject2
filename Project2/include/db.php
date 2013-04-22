<!--
Name : Satish Birajdar and Simranjit Sidhu
File Name : db.php
Description : A desktop and Mobile-Specific Web Forum leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->

<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'db200234918';

/*** mysql password ***/
$password = '13126';

/*** db name ***/
$dbname = 'db200234918';

try 
{
    $connection = mysql_connect($hostname, $username, $password);
    mysql_select_db($dbname);
} 
catch (Exception $e) 
{
    // normally we would log this error
    echo $e->getMessage();    
}   

function db_select_list($query)
{
    $q = mysql_query($query);
    if (!$q) return null;
    $ret = array();
    while ($row = mysql_fetch_array($q, MYSQL_ASSOC)) {
        array_push($ret, $row);
    }
    mysql_free_result($q);
    return $ret;
} 

function db_select_single($query)
{
    $q = mysql_query($query);
    if (!$q) return null;
    $res = mysql_fetch_array($q, MYSQL_ASSOC);
    mysql_free_result($q);
    return $res;
}
?>