<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_SESSION["user_name"])){
        
    session_destroy();
    session_regenerate_id(TRUE);
    session_start();
    
   // header("Location: $_SERVER['REQUEST_URI']");
$address="../".substr( $_SERVER['HTTP_REFERER'], 25);
        header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
     header("Location: $address");}
    
?>