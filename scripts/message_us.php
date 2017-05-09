<?php
include("database_connection.php");
$email=$_POST["email"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$text=$_POST["message"];


    if($email!=NULL && $name!=NULL && $phone!=NULL && $text!=NULL)
    {
        db_connect();
        mysql_query("INSERT INTO message (email,name,phone_number,text) VALUES ('$email','$name','$phone','$text')");
        ?> 
            
        <?php
          header("Location: contacts_temp.php");
    }else
    {
        redirect("contacts_temp.php","Fill all fields");
    }

?>