<?php
require ("database_connection.php");
db_connect();


$name=$_POST['name'];
$email=$_POST['email'];
$password= ($_POST['password']); 
$surname=$_POST['surname'];
$phone=$_POST['phone'];



$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}
else
{
    $result = mysql_query("SELECT * FROM users WHERE email='$email'");
    $data = mysql_num_rows($result);
if(($data)==0)
{
    $password_new=encr($password);
            $query = mysql_query("insert into users (name,surname,email,password,phone) values ('$name','$surname','$email', '$password_new','$phone')"); 
    $res = mysql_query("SELECT id FROM users WHERE email='$email'");
    $data= mysql_fetch_array($data);
        if($query)
        {
         $_SESSION["user_name"]=$name;
         $_SESSION["user_email"]=$email;
        $_SESSION["user_id"]=$data["id"];
            header("Location: ../main_page/MAIN.php");
        }
        else
        {
            echo "Error....!!";
        }
}
else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ();


?>