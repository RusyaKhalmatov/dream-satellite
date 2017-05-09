<!DOCTYPE html>
<html>
	<head>
    <title>Content</title>
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
		    <div class="container-fluid">
        <div class="row">
            
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container" id="navi">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-menu">
                          <span class="sr-only"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                   
                    <div class="collapse navbar-collapse" id="resp-menu">
                       
                       <form class="navbar-form navbar-right" role="search" >
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                      </form>
                       
                        <ul class="nav navbar-nav navbar-right">
                            <li class="listNav" id="ma"><a href="../index.php">Main</a></li>
                            <li class="listNav" id="prod"><a href="scripts/production.php">Trips</a></li>
                            <li class="listNav" id="adv"><a href="adv_temp.php">Advantages</a></li>
                            <li class="listNav" id="news"><a href="scripts/news.php">News</a></li>
                            <li class="listNav" id="cont"><a href="scripts/contacts.php">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
			
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
                               <p class="cnt">dreamSatellite.info@mail.ru</p>
                               <p class="cnt">dreamSatellite@gmail.com</p>
                           </div>
                           
                       </div>
                   </div>
                   <div class="col-lg-4" id="cont_contacts">
                       
                       <div id="map">My map will go here</div>
                   </div>
                   <div class="col-lg-4" id="rd">
                      <h5>Appeal</h5>
                       <div id="form_cont">
                          
                           <form action="message_us.php" method="post">
                              <label for="email">Email address:</label>    
                               <input type="email" size="33" name="email"> <br />
                               <label for="name">Name:</label><br />
                               <input type="text" size="33" name="name"> <br />
                               <label for="phone">Phone:</label><br />
                               <input type="text" size="33" name="phone"> <br />
                               <label for="message">Enter your your message:</label>
                               <textarea cols="30" rows="5" name="message"></textarea>
                               <input type="submit">
                               
                           </form>
                       </div>
                   </div>

			       
			   </div> 
			</div>
			
			<!--Foot side-->
			<div class="container-fluid" id="foot">
   <div class="row">
       
           <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4" id="Contacts_info">
               <!--span class="glyphicon glyphicon-earphone"> </span-->
               <h3 id="phone">(99697)716-24-44</h3>
               
               <!--span class="glyphicon glyphicon-envelope"> </span-->
               <h3 id="mail">dreamSatellite.info@mail.ru</h3>
               <!--span class="glyphicon glyphicon-map-marker"> </span-->
             <h3 id="address">Tashkent city, 100053, Bogishamol street, 160</h3>
                    </div>

         
           <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-1">
              <h3 id="telegram">Telegram </h3>
                <h3 id="gmail">Gmail </h3>
               <h3 id="facebook">Facebook </h3>

           </div>
    </div>
</div>   
     

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
        <script src="../js/jquery.fittext.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
        <script type="text/javascript">
        //$("#Contacts_info").fillText()
		$("#address").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#phone").fitText(6, { minFontSize: '15px', maxFontSize: '25px'});
        $("#mail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#telegram").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#gmail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#facebook").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
	</script>
			
<script>
function myMap() {
 var myCenter = new google.maps.LatLng(41.3384243,69.3328563);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 25};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>			
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAAXhRz3GXr2JbXvAHdvTqEnaIARdmVhI&callback=myMap"></script>      
	
    <script src="../js/bootstrap.js"></script>
		
	</body>

</html>