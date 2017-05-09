<?php 

include ("../scripts/database_connection.php");
if(!isset($_SESSION))
    {
        session_start();
    }


$days=$_POST["days"];

$phone_number=$_POST["phone"];
$children_number=$_POST["childnumber"];
$adult_number=$_POST["adultnumber"];
$child_price=$_SESSION["price_adult"];
$adult_price=$_SESSION["price_child"];
$page=$_SESSION["page_id"];
$total_price=0;
if($days!=NULL && $children_number!=NULL && $adult_number!=NULL)
{
     db_connect();
        
    if ($_SESSION["user_name"]!=NULL && $_SESSION["user_id"]!=NULL)
    {
        
    $user_id=$_SESSION["user_id"];
    $adult_cost=$adult_number*$adult_price;
    $child_cost=$children_number*$child_price;
    $total_price=$adult_cost+$child_cost;
    $_SESSION["numb_ad"]=$adult_number;
    $_SESSION["ad_co"]=$adult_cost;
    $_SESSION["ch_co"]=$child_cost;  
    $_SESSION["numb_ch"]=$children_number;
    $_SESSION["total"]=$total_price;
        
        mysql_query("INSERT INTO tour_order (user_id, order_id, phone_numb, numb_adult, numb_child, total_price) VALUES ('$user_id', '$page', '$phone_number', '$adult_number', '$children_number', '$total_price')");
        
          $query1=mysql_query("SELECT id FROM tour_order WHERE order_id='$page' AND numb_adult='$adult_number' AND numb_child='$children_number' AND total_price='$total_price'");
           
            $data=mysql_fetch_assoc($query1);
           $id=$data["id"];
          
           $query2=mysql_query("INSERT INTO events (tour_id) VALUES ('$id')");
    redirect("dream_temp.php?id=$page_id", "Order accepted");
        
     header("Location: confirm.php");
    }else
        {
        
            redirect("tour_temp.php?id=$page", "You have to login first!");
        }
    
}else
{
    redirect("tour_temp.php?id=$page", "Wrong input");
}



?>