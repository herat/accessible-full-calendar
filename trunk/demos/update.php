<?php

$iddd = $_GET["id"];
$newstartd = $_GET["start"];
$newend = $_GET["end"];
$newtitle = $_GET["title"];

$con = mysql_connect("localhost","root","root");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("test");

$query = "UPDATE `full-calendar-events` SET start = '".$newstartd."', end = '".$newend."' WHERE id=".$iddd;
mysql_query( $query, $con );

?>