<?php
if (!isset($_SESSION))
           session_start();
require("../scripts/database_connection.php");
db_connect();
$score=$_POST["score"];
$user_id=$_SESSION["user_id"];
$dream_id=$_SESSION["dream_id"];
if($score!=NULL)
{
    
 mysql_query("INSERT INTO rating_dream (score,user_id,dream_id) VALUES ('$score','$user_id','$dream_id')");
    
    $_SESSION["rating_dream_status"]=$dream_id;
    redirect("dream_temp.php?id=$dream_id", "");
}


?>