<?php
include("../scripts/database_connection.php");
db_connect();
$name=$_POST["name"];
$surname=$_POST["surname"];
$id=$_POST["id"];
$email=$_POST["email"];
$phone=$_POST["phone"];

    
$query = mysql_query("SELECT name,email,password FROM users WHERE email='$email'");
     $data=mysql_fetch_assoc($query);

    if($_POST["id"]!=NULL && $_POST["name"]!=NULL && $_POST["surname"]!=NULL && $_POST["email"]!=NULL && $_POST["phone"]!=NULL)
    {
        mysql_query("UPDATE users SET id='$id', name='$name',surname='$surname', email='$email', phone='$phone'
        WHERE email='$email'");
        redirect("user_content.php","Changes has been saved");
    }else
    {
        redirect("user_content.php","Fill all the fields");
    }

?>