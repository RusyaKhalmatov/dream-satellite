<?php 
$dream_id=$_GET["id"];
if(!isset($_SESSION))
    {
        session_start();
    }
$_SESSION["rating_dream_status"];
    $_SESSION["dream_id"]=$dream_id;

include ("../scripts/database_connection.php");
db_connect();
        
        $query = mysql_query("SELECT * FROM dreams WHERE id='$dream_id'");     
        $data=mysql_fetch_assoc($query);
        
    $price=$data["price"];

?>


<!DOCTYPE html>
<html>
	<head>
    <title>Dreams</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
      <link href="../tours/css/tour_tempStyle.css" style="text/css" rel="stylesheet">
	</head>
	
	<body>
		  
		    <!--Navigation side-->
		    
			<?php include("../user_page/user_navigation.php")?>
			<!--Content side-->
			
		<div class="container" style="margin-top:100px; background-color:white; border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			    <div class="row">
			        
			        <div class="col-lg-8" style="padding:20px;">
			            
			            <h1>You hava a chance for <?=$data["name"];?></h1>
			         
			            
			            <div class="col-lg-12" style="margin-top: 20px; padding:20px;">
			                <h1>Description</h1>
			                <p><?=$data["description"];?></p>
			                
			            </div>
			            <!--RATING-->
                        <div class="col-lg-12" style="black;">
                            <h2>Rating</h2>
                            <?php if(isset($_SESSION["user_name"])){    
                                if($_SESSION["rating_dream_status"]!=$dream_id){ 
                               ?>
                            <h3>Please, rate this trip from 1-5</h3>
                            
                             <form action="rate_dream.php" method="post">
                                 <input type="number" name="score">
                                 <input type="submit">
                             </form><?php }?>
                              <?php }else ?>
                              
                              <h3>Score: <?=overall_trip("rating_dream",$dream_id,"dream_id"); ?></h3>
                              
                        </div>
              <!--END OF RATING-->
                        
			            <div class="col-lg-12" style="margin-top: 20px;">
			                
			               <?php include("dream_slider.php"); ?>
                            
                           
			            
                        
                        <div class="col-lg-12">
                            <h2>Address:</h2>
                            <p><?=$data["address"]; ?></p>
                             
                        </div>
                        
                        
                        
                        
                        
			        </div>
			        <!--END OF PROPERTIES-->
			        
			        <!--ORDER BAR-->
			        
			        
                    
                    
                    
			        
			    </div>
			    <div class="col-lg-4" style="border-left:1px dashed black; padding: 30px;">
			           
                        <h2 style="color: red;">Make an order</h2>
                           
                        <form action="dream_order.php" method="post" id="order_form">
			            <table>
                            
                            <tr>
                                <th>
                                <label for="price">Price:</label>
                                </th>
                            
                                <th>
                                <input type="number" name ="price" value="<?=$price;?>" readonly> 
                                </th>
                                
                                <th>
                                    <span class="error_form" id="adult_error_message">$</span>
                                </th>
                            </tr>
                            
                            <tr>
                                <th>
                                <label for="number_of_people">Number of people:</label>
                                </th>
                            
                                <th>
                                <input type="number" min=1 name="number_of_people" class="order_form" id="number_of_people"> 
                                </th>
                                
                                <th>
                                    <span class="error_form" id="adult_error_message"></span>
                                </th>
                            </tr> 
                        
                            <tr>
                            
                                <th>
                                    Phone (+998)
                                </th>
                            
                                <th>
                                    <input type="text" name="phone" class="order_form" id="phone"> 
                                </th>
                                
                                <th>
                                    <span class="error_form" id="phone_error_message"></span>
                                </th>
                            </tr>
                          
                        </table>
                            <input type="submit" value="Make order" style="height:50px; width:100px; margin-top: 10px; margin-left: 120px;">
                             
                    </form>
                    <?php 
       
            if (isset($_SESSION["message"]))
            {
            ?>
            <div id="message" style="color: red;"><?=$_SESSION["message"]?></div>
            <?php
                unset($_SESSION["message"]);
            }
                ?>
			        </div>
			    <div class="col-lg-4" style="border-left:1px dashed black; border-bottom:1px dashed black;">
                    
                    <h3>Our contacts:</h3>
                        <h4>(99897) 749-46-17</h4>
                        <h4>(99897) 588-00-00</h4>
                    
                    </div>
            </div>
			</div>
			
<br />
			<!--Foot side-->
		<?php include("../scripts/foot_temp.php") ?>
		<script>
        
        
        </script>
		
	</body>
<style>
    body
    {
        background-color: aqua;
    }
    
    </style>
</html>