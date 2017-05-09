<html>
    <head>
        <link href ="../main_page/css/sliderStyle.css" style="text/css" rel="stylesheet">
        
    </head>
    
    <body>
       
       <div class="slideshow-container">
            <div class="mySlides fade">
                <img id="myPhoto" src="../main_page/img/sl1.png" alt="one" style="width:1430px; height:500px;"/>
            </div>
        
        <div class="mySlides fade">
                
               
                <img id="myPhoto" src="../main_page/img/sl2.jpg" alt="one" style="width:1430px; height:500px;"/>
           
            </div>
        
        
        
        <div class="mySlides fade">
                
                
                <img id="myPhoto" src="../main_page/img/sl3.jpg" alt="one" style="width:1430px; height:500px;"/>
              
            </div>
            <div class="mySlides fade">
                
               
                <img id="myPhoto" src="../main_page/img/sl2.jpg" alt="one" style="width:1430px; height:500px;"/>
           
            </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                <a class="next" onclick="plusSlides(1)">&#10095</a>
        </div>
        <br>
        
        <div id ="dts" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        
        <script src="../main_page/js/slider.js"></script> 
    </body>
    
</html>
