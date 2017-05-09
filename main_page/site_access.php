<html>
    <head>
        <title>login</title>
        <link href="../style/adm_log.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php  if(!isset($_SESSION))
        {
            session_start();    
        }
        
        if(isset($_SESSION["user_name"]))
            header("Location: MAIN.php");
            
        ?>
        <div id="EnterWindow">
            <h1>Welcome</h1>
            <h3>Enter your login and password</h3>
            <div id="enterLines">
              <form action="log_user.php"  method="post">
               <label for="login">Email:</label>
                <input type="email" id="email" name="email">
                <br /> <br />
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br />
                <input type="submit">
                </form>
            </div>
           <?php 
       
            if (isset($_SESSION["message"]))
            {
            ?>
            <div id="message"><?=$_SESSION["message"]?></div>
            <?php
                unset($_SESSION["message"]);
            }
                ?>
        </div>
        
    </body>
    
</html>