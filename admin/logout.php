<?php
    include("database_connection.php");
    if(isset($_SESSION))
    {
        session_destroy();
        session_regenerate_id(TRUE);
        session_start();
        redirect("/project\accsess.php","Logout successful");    }
    
?>