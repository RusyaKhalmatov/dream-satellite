<?php
if (!isset($_SESSION))
           session_start();
require_once ("app_config.php");
#return true if password is correct
function is_password_correct($login,$password)
{
    db_connect();
    $query = mysql_query("SELECT name,login,password FROM admins WHERE login='$login'");
     $data=mysql_fetch_assoc($query);
 
        if($data['password']==$password &&             $data['password']!=null)
        {
            return true;
        }
    else
        return false;
}

function verify_user($email, $password)
{
    db_connect();
    $query = mysql_query("SELECT name,email,password FROM users WHERE email='$email'");
     $data=mysql_fetch_assoc($query);
 
        if($data['password']==$password && $data['password']!=null)
        {
            return true;
        }
    else
        return false;
}
function db_connect()
{
    require_once ("app_config.php");
	$link=mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD);
	mysql_select_db(DATABASE_NAME);
}

function redirect($url,$message)
{
    
    $_SESSION["message"]=$message;
    
    header("Location: $url");
}

function ensure_login()
{
    if(!isset($_SESSION["name"]))
        redirect("\project\accsess.php","First you must login");
}

    function get_trip($id)
    {
    
        db_connect();
        
        $query = mysql_query("SELECT * FROM `trips`
FULL OUTER JOIN `hotels`
ON `trips`.`hotel` = `hotels`.`name` WHERE 'trips'.'trip_id'=$id");
     $data=mysql_fetch_assoc($query);
        
        
        
        
    }

?>


 