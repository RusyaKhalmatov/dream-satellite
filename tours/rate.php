<?php
if (!isset($_SESSION))
           session_start();
require("../scripts/database_connection.php");
db_connect();
$score=$_POST["score"];
$user_id=$_SESSION["user_id"];
$tour_id=$_SESSION["page_id"];
if($score!=NULL)
{
    
 mysql_query("INSERT INTO rating_tour (score,user_id,tour_id) VALUES ('$score','$user_id','$tour_id')");
    
    $_SESSION["rating_status"]=$tour_id;
    redirect("tour_temp.php?id=$tour_id", "");
}


?>