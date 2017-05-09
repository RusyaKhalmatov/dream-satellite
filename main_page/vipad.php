<html>

   <?php
    
    if(!isset($_SESSION))
        session_start();
    ?>

<head>
<link href="css/vipad.css" style="text/css" rel="stylesheet">
</head>

<body>
	<nav class="menuNav">
		<ul class="unordered">
            <li class="listNav"><a href="MAIN.php"> Main</a>
                  
            </li>
            <li class="listNav"><a href="../scripts/trips_temp.php">Trips</a></li>
            <li class="listNav"><a href="../scripts/adv_temp.php">Advantages</a></li>
			<li class="listNav"><a href="../scripts/news_temp.php">News</a></li>
            
            <li class="listNav"><a href="../scripts/contacts_temp.php">Contacts</a>      
			</li>
           <li class="listNav" ><?php if(isset($_SESSION["user_name"])){?>
               <a href="../user_page/user_content.php" id="users_name"><?php
                
                    echo "Hi, ";?>
                <?= $_SESSION["user_name"];
                }
                   else
                   echo "Guest"?></a>
                <?php if(isset($_SESSION["user_name"])){?>
                <ul>
                    <li> <a href="../scripts/log_out.php">log out</a></li>
                </ul>
                    <?php }?>
           </li>
            
            </ul>
            
        <a class="reg" href="../scripts/registrationForm.php">
        <img class="pic" src="../main_page/img/reg.png" alt="picture" style="width:170px;height:50px;">
            </a>
            
	</nav>
     
</body>

</html>

