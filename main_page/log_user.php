<?php

    if(!isset($_SESSION))
        session_start();

require_once ("../scripts/database_connection.php");
db_connect();
$email = $_POST["email"];
$password=$_POST["password"];
$query = mysql_query("SELECT id,name,email,password FROM users WHERE email='$email'");
$data=mysql_fetch_array($query);
$name=$data["name"];

if(isset($_POST["email"]) && isset($_POST["password"]))
{
   
    if (verify_user($email,$password))
      {
         $_SESSION["user_name"]=$name;
         $_SESSION["user_email"]=$email;
        $_SESSION["user_id"]=$data["id"];
         redirect("MAIN.php","");
      }
    else
    {
        redirect("site_access.php","Incorrect input");
       
    }
    
}


?>