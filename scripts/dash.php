<?php 

require_once ("database_connection.php");
db_connect();
$date= date("Y-m-d");
$query=mysql_query("SELECT hosts, views FROM visits WHERE date='$date'");

$row=mysql_fetch_assoc($query);




?>