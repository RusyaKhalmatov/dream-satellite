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
     
        
	</head>
	
	<body>
		
		    <!--Navigation side-->
		      <?php include("navigation.php")?>
		      
<!--SORT-->
           
            <?php include("../tours/sort_panel.php"); ?>
<!--END OF SORT-->
<!--Trip site-->
			
			<div class="container" style="margin-top:30px;">
			    <div class="row">
			     <?php  
                    include("database_connection.php");
        db_connect();
                   $query = mysql_query("SELECT trip_id, country, hotel,img, details FROM trips");
        
        while ($row=mysql_fetch_array($query))
        {?>
           <div class="col-sm-4 col-md-4">
                         <div class="thumbnail">
                          <img src="../image/<?=$row["img"];?>.jpg" alt="..." style="width:300px; height: 200px;">
            <?php $trip_id=$row["trip_id"]; ?>
                          <div class="caption">
                            <h3 class="text-center"><?=$row["country"];?>, <?=$row["hotel"];?></h3>
                            <p class="text-justify"><?=$row["details"]; ?></p>
                            <p><a href="../tours/tour_temp.php?id=<?=$trip_id;?>" class="btn btn-primary" role="button" style="margin-left:60px; width:200px;">See more</a> 
                          </div>
                        </div>
                    </div>
        
             
        <?php }?>
  <!--END OF TRIP SIDE-->       
			 
		<!--Dream side--> 
           
             <div class="col-lg-12">
			     <div class="row">
			         <h2 id="word">Make your dream come true</h2>
<?php  
                   
                   $result= mysql_query("SELECT id, name, description,img1 FROM dreams");
                    
        while ($res=mysql_fetch_assoc($result))
        {?> 
			         <div class="col-sm-3 col-md-3">
                         <div class="thumbnail">
                          <img src="../image/<?=$res["img1"];?>" alt="..." style="width:300px; height: 200px;">
                   <?php $d_id=$res["id"]; ?>
                          <div class="caption">
                            <h3 class="text-center"><?=$res["name"]; ?></h3>
                            <p class="text-justify"><?=$res["description"]; ?></p>
                            <p><a href="../dreams/dream_temp.php?id=<?=$d_id;?>" class="btn btn-primary" role="button" style="margin-left:40px; width:150px;">See more</a> 
                          </div>
                        </div>
                      </div><?php }?>
			     </div>
			  </div>
    
        <!--END OF DREAM SIDE-->       
			    </div>
			</div>
			
			<!--Foot side-->
			<?php include("foot_temp.php") ?>
		
	</body>

</html>