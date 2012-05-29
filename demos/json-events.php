<?php

	$year = date('Y');
	$month = date('m');
	
	$con = mysql_connect("localhost","root","");
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

	//mysql_free_result($result);
	//mysql_close($db);
	
	echo json_encode( $rows );
?>
