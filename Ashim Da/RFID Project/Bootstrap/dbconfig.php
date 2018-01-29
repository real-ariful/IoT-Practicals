<?php

$host ="localhost";  //Host name
$username ="newosms"; //Mysql username
$password ="123"; //Mysql password
$db_name ="newosms"; //Database name
$tbl_name = "userinfo"; //Table name

$connection =mysql_connect($host, $username, $password);

if(!$connection)
{
    die("Connection failed".mysql_error());
}

$db_select=mysql_select_db($db_name, $connection);
if(!$db_select)
{
    die("Selection failed".mysql_error());
}
?>