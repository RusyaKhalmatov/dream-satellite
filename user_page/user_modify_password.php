<?php
include("../scripts/database_connection.php");
db_connect();
$password_old=$_POST["pass_old"];
$password_new1=$_POST["pass_new1"];
$password_new2=$_POST["pass_new2"];
$email=$_SESSION["user_email"];

if($password_old!=NULL && $password_new1!=NULL && $password_new2!=NULL)
{
    if(verify_user($email,$password_old))
    {
        if($password_new1!=$password_new2)
        {
            redirect("user_content.php","New passwords doesn't match!");
        }else
            $pass = encr($password_new1);
        mysql_query("UPDATE users SET password='$pass'
        WHERE email='$email'");
        redirect("user_content.php","Changes has been saved");
        
    }else
    {
         redirect("user_content.php","Wrong password!");
    }
    
}else
{
    redirect("user_content.php","Fill all the fields");
}
?>