<?php
include ("database_connection.php");
db_connect();

$cost=$_POST["range"];
$country=$_POST["country"];
$previous_page=$_SESSION["page_id"];

?>

<!DOCTYPE html>
<html>
	<head>
    <title>Trips</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
 <link  href="css/tour_tempStyle.css" rel="stylesheet" style="text/style">
     
	</head>
	
	<body>
		  
		    <!--Navigation side-->
		    
			<?php include("../user_page/user_navigation.php")?>
			<!--END OF NAVIGATION-->
			
			<!--Content side-->
    <div class="container" style="margin-top:100px;">
            <h2>The result of search</h2>
			
			<div class="panel panel-default">
  <!-- Default panel contents -->
              <div class="panel-heading">Tours</div>
              

              <!-- Table -->
           
			<?php  
    if($cost!=NULL && $country!=NULL)
    {
    $count=1;
    $query=mysql_query("SELECT * FROM trips WHERE price_adult<='$cost' AND country='$country'");
    echo "<table class='table'>";
        
        while ($row=mysql_fetch_array($query))
        {
            $page=$row["trip_id"];
            
            $hotel=$row["hotel"];
            echo "<tr>";
          echo "<td>"; echo $count; echo "</td>";
            echo "<td>"; echo $row["country"]; echo "</td>";
            echo "<td>"; echo $row["city"];   echo "</td>";
            echo "<td>"; echo "<a href=\"../tours/tour_temp.php?id=$page;\">$hotel</a>";  echo "</td>";
            echo "<td>"; echo $row["details"];  echo "</td>";
            echo "<td>"; echo $row["price_adult"];  echo "</td>";
            echo "</tr>";
           $count++; 
        }
        echo "</table>";
    
}else
    redirect("../tours/tour_temp.php?id=$previous_page", "");
        ?>
              </div>
              </div>
			            
			<!--Foot side-->
			<div class="navbar navbar-fixed-bottom">
			    <?php include("foot_temp.php") ?>
			</div>
		
		
		
	</body>

</html>

