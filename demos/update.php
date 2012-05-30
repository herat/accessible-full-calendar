<?php

$iddd = $_GET["id"];
$newstartd = $_GET["start"];
$newend = $_GET["end"];
$newtitle = $_GET["title"];
$command = $_GET["cmd"];

$con = mysql_connect("localhost","root","root");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("test");

if( strcmp($command,"update") == 0 )
{
	$query = "UPDATE `full-calendar-events` SET start = '".$newstartd."', end = '".$newend."' WHERE id=".$iddd;
	mysql_query( $query, $con );
}
else if( strcmp($command,"create") == 0 )
{
	/*$query = "UPDATE `full-calendar-events` SET start = '".$newstartd."', end = '".$newend."' WHERE id=".$iddd;
	mysql_query( $query, $con );*/
}
else if( strcmp($command,"delete") == 0 )
{
	$query = "DELETE FROM `full-calendar-events` WHERE id=".$iddd;
	mysql_query( $query, $con );
}
?>