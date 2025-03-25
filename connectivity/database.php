<?php
	$url='localhost';
	$username='root';
	$password='';
	$conn=mysqli_connect($url,$username,$password,"shop");//mysqli_connect =>predefined function used to search & connect database
	if(!$conn)
	{
		die('Could not connect to My Sql:'.mysql_error()); // die =>predefined func to print error only
	}
?>