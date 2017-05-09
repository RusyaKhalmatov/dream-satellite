<?php
    if(!isset($_SESSION))
   session_start();
    ?>
   <html>
    <head>
       <script src="../js/check_page.js" type="text/javascript"></script>
    </head>
   
    <body>
        <div id="first">
            <h1 id="page_name">Hello,<?= $_SESSION["name"]?></h1>
            <div id="mainBut">
            <h2 id="welcome"> </h2>
        
        
         </div>
 </div>
        
    </body>
    
    
</html>
     

       