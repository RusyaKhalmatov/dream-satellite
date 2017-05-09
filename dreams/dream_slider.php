
<div id="carousel" class="carousel slide"> 
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
        <div class="item active">
            <img src="../image/<?=$data['img1']; ?>" alt="" class="center-block">
        
        </div>
        <div class="item">
            <img src="../image/<?=$data['img2']; ?>" alt="" class="center-block">
            
        </div>
        <div class="item">
            <img src="../image/<?=$data['img3']; ?>" alt="" class="center-block">
        </div>
        
        <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>
    
</div>          

