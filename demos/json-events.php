<?php

	$con = mysql_connect("localhost","root","root");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("test");
	
	$query = "SELECT * FROM `full-calendar-events`";
	$result = mysql_query($query);
	
	$rows = array();
	
	while ($row = mysql_fetch_assoc($result)) 
	{
		array_push( $rows, $row );		
	}

	$str =  json_encode( $rows );
	$str = str_replace('"true"','true',$str);
	$str = str_replace('"false"','false',$str);
	echo $str;
?>
