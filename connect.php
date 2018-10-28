<?php
$con = mysql_connect("localhost","root","");

if(!$con)
{
	die('could not connected:'.mysql_error());
	
}


if(!mysql_select_db('online'))
{
	die('database not connected:' .mysql_error());
	
}


?>