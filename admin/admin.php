<!DOCTYPE html>
<html>
<head>
   <?php
    include ("database_connection.php");
    if(!isset($_SESSION))
   session_start();
    ensure_login();
   
    ?>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
     
    <link href="css/headerStyle.css" rel="stylesheet" type="text/css" />
     <link href="css/main_bodyStyle.css" rel="stylesheet" type="text/css" />
     <link href="css/left_sidebar.css" rel="stylesheet" type="text/css" />
     
</head>
<body>
	<?php require ("header.php");?>
	<?php require ("left_sidebar.php")?>
	<?php require ("main_body.php")?>
	
</body>
</html>