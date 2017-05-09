<?php  
if(!isset($_SESSION))
    {
        session_start();
    };
$trip_id=$_SESSION["page_id"];
?>
<!DOCTYPE html>
<html>
    
    <head>
         <link href="../css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6" style="border:1px solid black; margin-top:60px; padding: 50px;">
                    
                    <h1>Confirmation page</h1>
                    <h3>Please check the filled information</h3> 
                    <table style="border: 1px solid green;">
                       
                       <tr>
                            <th>
                                <h3>Category: </h3>
                            </th>
                            
                             <th>
                                <h3>Quantity</h3>
                            </th>
                            
                             <th>
                                <h3>Price</h3>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <h3>Adults: </h3>
                            </th>
                            
                             <th>
                                <h3><?=$_SESSION["numb_ad"]; ?></h3>
                            </th>
                            
                             <th>
                                <h3><?= $_SESSION["ad_co"]; ?>$</h3>
                            </th>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Children: </h3>
                            </th>
                            
                             <th>
                                <h3><?=$_SESSION["numb_ch"]; ?></h3>
                            </th>
                            
                             <th>
                                <h3><?=$_SESSION["ch_co"];?>$</h3>
                            </th>
                        </tr>
                        
                    </table>                 
                     
                </div>
                
                <div class="col-lg-6" style="border:1px solid black; margin-top:60px; padding:50px;">
                    
                    <h1>Total price: <?=$_SESSION["total"]?>$</h1>
                   
                    <h3>Destination</h3>
                    <table>
                        
                        <tr>
                            <th>
                               <h3>Country:</h3> 
                            </th>
                            
                            <th>
                                <h3><?=$_SESSION["country"]; ?></h3>
                            </th>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>City:</h3>
                            </th>
                            
                            <th>
                                <h3><?=$_SESSION["city"]; ?></h3>
                            </th>
                        </tr>
                        
                        <tr>
                            <th>
                                <h3>Hotel</h3>
                            </th>
                            
                            <th>
                                <h3><?=$_SESSION["hotel"]; ?> </h3>
                            </th>
                        </tr>
                        
                    </table>
                </div>
                <div class="col-lg-12">
                     <h3 style="color: brack; margin-left: 100px;">Thank you for making an order! We will call you in a 15 minutes</h3>  
                     
                    <a href="tour_temp.php?id=<?=$trip_id ?>" style="color:black; font-size: 28px;"> Back</a>     
                </div>
               
                
            </div>
            
        </div>
        
        <style>
        th
            {
                padding: 20px;
                border:1px solid green;
            }
        
        </style>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
        <script src="../js/jquery.fittext.js"></script>
</html>