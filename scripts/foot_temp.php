	<div class="container-fluid fixed-bottom" id="foot" >
   <div class="row">
       
           <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4" id="Contacts_info">
               <!--span class="glyphicon glyphicon-earphone"> </span-->
               <h3 id="phone">(99697)716-24-44</h3>
               
               <!--span class="glyphicon glyphicon-envelope"> </span-->
               <h3 id="mail">dreamcatchers.info@mail.ru</h3>
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
     
<?php  
    include("count.php");
    ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
        <script src="../js/jquery.fittext.js"></script>
    
    
        <script type="text/javascript">
		$("#address").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#phone").fitText(6, { minFontSize: '15px', maxFontSize: '25px'});
        $("#mail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#telegram").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#gmail").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
        $("#facebook").fitText(6, { minFontSize: '15px', maxFontSize: '25px' });
	</script>
			
     
	
    <script src="../js/bootstrap.js"></script>