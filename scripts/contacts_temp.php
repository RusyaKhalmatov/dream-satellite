<!DOCTYPE html>
<html>
	<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
      <link href="../css/contactStyle.css" rel="stylesheet" style="text/style">
        
	</head>
	
	<body>
		
		    <!--Navigation side-->
		    
			<?php include("navigation.php")?>
			<!--Content side-->
			
			<div class="container" id="body_temp">
			   <div class="row">
                  <h1 id="cont_title">Contacts</h1>
                   
                   <div class="col-lg-4">
                       <h2>
                          Our address:
                       </h2>
                       <p id="street">Tashkent city, 100053, Bogishamol street, 160</p>
                       <div class="address_cont">
                           <h2>Our contacts:</h2>
                           <div id="numbers">
                               <h4>Phone number:</h4>
                               <p class="cnt">(998 71) 234-35-32</p>
                               <p class="cnt">(998 97) 718-24-44</p>
                               <h4>Telegram:</h4>
                               <p class="cnt">(998 90) 971-27-10</p>
                               <h4>Email:</h4>
                               <p class="cnt">dreamcatchers.info@mail.ru</p>
                               <p class="cnt">dreamcatchers@gmail.com</p>
                           </div>
                           
                       </div>
                   </div>
                   <div class="col-lg-4" id="cont_contacts">
                       
                       <div id="map">My map will go here</div>
                   </div>
                   <div class="col-lg-4" id="rd">
                      <h5>Message us</h5>
                       <div id="form_cont">
                          
                           <form action="message_us.php" method="post">
                              <label for="email">Email address:</label>    
                               <input type="email" class="inp"  size="25" name="email"> <br />
                               <label for="name">Name:</label><br />
                               <input type="text" class="inp"  size="25" name="name"> <br />
                               <label for="phone">Phone:</label><br />
                               <input type="text" class="inp"  size="25" name="phone"> <br />
                               <label for="message">Enter your your message:</label>
                               <textarea cols="30" class="inp"  rows="5" name="message"></textarea>
                               <input type="submit" value="Send" style="width: 100px; height: 40px; margin-left:">
                           </form>
                           <?php 
       
            if (isset($_SESSION["message"]))
            { if($_SESSION["message"]=="Fill all fields"){
            ?>
            
            <script>alert("Fill all fields");</script>
            <?php
            }unset($_SESSION["message"]);
            }
                ?>
                       </div>
                   </div>

			       
			   </div> 
			</div>
			
			<!--Foot side-->
		<?php include("foot_temp.php") ?>
		<script>
function myMap() {
 var myCenter = new google.maps.LatLng(41.3384243,69.3328563);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 16};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>			
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAAXhRz3GXr2JbXvAHdvTqEnaIARdmVhI&callback=myMap"></script> 
	</body>

</html>