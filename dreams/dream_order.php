<?php
if(!isset($_SESSION))
        session_start();

include ("../scripts/database_connection.php");
$numb_of_ppl=$_POST["number_of_people"];
$price=$_POST["price"];
$phone=$_POST["phone"];
$page_id=$_SESSION["dream_id"];


    
    if($numb_of_ppl!=NULL && $phone!=NULL)
    {
        db_connect();
        
       if ($_SESSION["user_name"]!=NULL && $_SESSION["user_id"]!=NULL){
       $user_id=$_SESSION["user_id"];
           $query=mysql_query("INSERT INTO dream_order (user_id, order_id, cost,phone_numb) VALUES ('$user_id', '$page_id', '$price','$phone')");
           
           $query1=mysql_query("SELECT id FROM dream_order WHERE order_id='$page_id' AND cost='$price' AND user_id='$user_id'");
           
            $data=mysql_fetch_assoc($query1);
           $id=$data["id"];
          
           $query2=mysql_query("INSERT INTO events ( dream_id) VALUES ('$id')");
    redirect("dream_temp.php?id=$page_id", "Order accepted");
       }
    
        else
        {
            redirect("dream_temp.php?id=$page_id", "You have to login first!");
        }
           
        
       
    }
?>