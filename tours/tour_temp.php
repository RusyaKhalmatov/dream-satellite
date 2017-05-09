<?php 
$trip_id=$_GET["id"];
if(!isset($_SESSION))
    {
        session_start();
    }
$_SESSION["page_id"]=$trip_id;

include ("../scripts/database_connection.php");
db_connect();
        
        $query = mysql_query("SELECT * FROM trips WHERE trip_id='$trip_id'");     
        $data=mysql_fetch_assoc($query);
        $hotel_name=$data["hotel"];
        $city=$data["city"];
        $country=$data["country"];
    $hotel=mysql_query("SELECT * FROM hotels WHERE name='$hotel_name'");
    $data_hotel=mysql_fetch_array($hotel);

$image=$data["img"];
    $_SESSION["price_adult"]=$data["price_adult"];
     $_SESSION["price_child"]=$data["price_child"];
    $_SESSION["country"]=$data["country"];
    $_SESSION["city"]=$city;
    $_SESSION["hotel"]=$hotel_name;    


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
        <script src="orderValidate.js" type="text/javascript"></script>
	</head>
	
	<body>
		  
		    <!--Navigation side-->
		    
			<?php include("../user_page/user_navigation.php")?>
			<!--Content side-->
			
			
			<!--SORTING PART-->      		
                <?php include("sort_panel.php"); ?>	
			<!--SORTING END-->
		<div class="container" style="background-color:white; margin-top:10px; border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			    <div class="row">
			        
			        <div class="col-lg-8" style=" padding:20px;">
			            
			            <h1>The trip to <?=$country; ?></h1>
			            <!--IMAGE-->
			                
			            <div class="col-lg-12 col-md-12">
			                <img src="../image/<?=$image;?>.jpg" class="img-responsive img-rounded" alt="tour image">
			            </div>
			            <!--END OF IMAGE-->
			            
			            
			            
			            <div class="col-lg-12" style=" margin-top: 20px; padding:20px;">
			                <h2>Description</h2>
			                <p><?=$data["details"];?></p>
			                
			            </div>
			  <!--RATING-->
                        <div class="col-lg-12" style="">
                            <h2>Rating</h2>
                            <?php if(isset($_SESSION["user_name"])){    
                                if($_SESSION["rating_status"]!=$trip_id){ 
                               ?>
                            <h3>Please, rate this trip from 1-5</h3>
                            
                             <form action="rate.php" method="post">
                                 <input type="number" name="score">
                                 <input type="submit">
                             </form><?php }?>
                              <?php }else ?>
                              
                              <h3>Score: <?=overall_trip("rating_tour", $trip_id, "tour_id"); ?></h3>
                              
              
              <!--END OF RATING-->
			            <div class="col-lg-12" style=" margin-top: 20px;">
			                
			                <h2><?=$hotel_name ?></h2>
                            
                            <p><?=$data_hotel["description"]; ?></p>
			                
			            </div>
			            <div class="col-lg-5 col-lg-offset-1" style=""> 
                        <h5>Phone: <?=$data_hotel["phone"] ?></h5>    
                        <h5>Website: <a href="<?=$data_hotel["webpage"];?>"><?=$data_hotel["webpage"];?></a></h5>
                        </div>
                        
                        <div class="col-lg-12">
                            <h2>Location</h2>
                            <table>
                                <tr>
                                    <th>Near airport: </th>
                                    
                                    <th><?=$data_hotel["airport"];?></th>
                                </tr>
                                
                                <tr>
                                    <th>Distance to the airport: </th>
                                    
                                    <th><?=$data_hotel["airport_distance"]; ?></th>
                                </tr>
                            
                                <tr>
                                    <th>Distance to the sea: </th>
                                    
                                    <th><?=$data_hotel["sea_distance"]; ?></th>
                                </tr>
                            </table>
                            
                        </div>
                        
                        <div class="col-lg-12">
                            <h2>Rooms</h2>
                            <table>
                                <tr>
                                    <th>Total area: </th>
                                    
                                    <th><?=$data_hotel["room_area"]; ?></th>
                                </tr>
                                
                                <tr>
                                    <th>Total amount of rooms: </th>
                                    
                                    <th><?=$data_hotel["numbofrooms"]; ?></th>
                                </tr>
                            
                                <tr>
                                    <th>Max number people per room: </th>
                                    
                                    <th><?=$data_hotel["people_per_room"]; ?></th>
                                </tr>
                              
                            </table>
                            
                        </div>
                        
                        <div class="col-lg-12">
                            <h2>Advantages</h2>
                            <table>
                                <tr>
                                    <th>Pool: </th>
                                    
                                    <th><?=$data_hotel["pool"]; ?></th>
                                </tr>
                                
                                <tr>
                                    <th>Restaurant: </th>
                                    
                                    <th><?=$data_hotel["restaurant"]; ?></th>
                                </tr>
                            
                                <tr>
                                    <th>Beach: </th>
                                    
                                    <th><?=$data_hotel["beach"]; ?></th>
                                </tr>
                              
                                <tr>
                                    <th>Game area: </th>
                                    
                                    <th><?=$data_hotel["game_area"]; ?></th>
                                </tr>
                            </table>
                            
                        </div>
                        
			        </div>
                    </div>
			        <!--END OF PROPERTIES-->
			        
			        <!--ORDER BAR-->
			        
			        <div class="col-lg-4" style="padding: 30px;">
			           
                        <h2 style="color: red;">Make an order</h2>
                           
                        <form action="order.php" method="post" id="order_form">
			            <table>
                            <tr>
                                <th>Price for adult: </th>
                                <th><input type="text "class="order_form" id="adultnumber" value ="<?=$data["price_adult"]; ?>" readonly>  </th>
                            </tr>
                            <tr>
                                <th>Price for child: </th>
                                <th><input type="text "class="order_form" id="adultnumber" value ="<?=$data["price_child"]; ?>" readonly>  </th>
                            </tr>
                            <tr>
                               
                                <th>
                                <label for="adultnumber">Adult:</label>
                                </th>
                            
                                <th>
                                <input type="number" min=1 name="adultnumber" class="order_form" id="adultnumber"> 
                                </th>
                                
                                <th>
                                    <span class="error_form" id="adult_error_message"></span>
                                </th>
                            </tr>
                            
                            <tr>
                                <th>
                                <label for="childnumber">Children:</label>
                                </th>      
                                <th>
                                <input type="number" min=1 name="childnumber" class="order_form" id="childnumber"> 
                                </th>
                                
                                <th>
                                    <span class="error_form" id="child_error_message"></span>
                                </th>
                                
                            </tr>
                            
                            <tr>
                                <th>
                                <label for="numbofdays">Number of days:</label>
                                </th>      
                                <th>
                                <input type="text" name="days" class="order_form" value="<?=$data["days"];?>" style="color:red;" readonly> 
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
                    
                    
                    <div class="col-lg-4" >
                    
                    <h3>Our contacts:</h3>
                        <h4>(99897) 749-46-17</h4>
                        <h4>(99897) 588-00-00</h4>
                    
                    </div>
			        
			    </div>
			    
			</div>
       
<br />
			<!--Foot side-->
		<?php include("../scripts/foot_temp.php") ?>
		<style>
        body
            {
                background-color: aqua;
            }
        </style>
		
	</body>

</html>