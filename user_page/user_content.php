<?php 
if (!isset($_SESSION))
           session_start();
include("../scripts/database_connection.php");
db_connect();

$email=$_SESSION["user_email"];

$query = mysql_query("SELECT * FROM users WHERE email='$email'");
     $data=mysql_fetch_assoc($query);
?>


<!DOCTYPE html>
<html>
	<head>
    <title>User page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact page dreamsatellite"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/foorTempStyle.css" style="text/css" rel="stylesheet">
      <link href="css/user_contentStyle.css" rel="stylesheet" style="text/style">
        
	</head>
	
	<body>
		
		    <!--Navigation side-->
		    
			<?php include("user_navigation.php")?>
			<!--Content side-->
			
			<h1>Welcome to users page!</h1>
		
		  <div class="container" id="usr_cnt">
		      
		      <h2>Here you can see and modify current information</h2>
		      <div class="row">
                 <?php if (isset($_SESSION["message"]))
                        {
                            ?>
            <div id="message_usr" style="margin-left:150px; font-size:30px;"><?=$_SESSION["message"]?></div>
            <?php
                unset($_SESSION["message"]);
            }
                ?>
                  <div class="col-lg-4 col-lg-offset-1" id="appl">
                     <h4>Modify personal information:</h4>
                      <form action="user_modify.php" method="post">
                        <table>
                            <tr>
                                <th>
                                   <label for="id">ID:</label>   </th>

                                <th>
                                    <input type="text" value="<?php echo $data["id"]?>" name="id"  class="usr_inpt" readonly>
                                </th></tr>

                            <tr>
                                <th><label for="name">Name:</label></th>
                                <th><input type="text" value="<?php echo $data["name"]?>" name="name" class="usr_inpt"></th>
                            </tr>
                               <tr>
                                <th><label for="surname">Surname:</label></th>
                                <th><input type="text" value="<?php echo $data["surname"]?>" name="surname" class="usr_inpt"></th>
                                </tr>

                             <tr>
                                <th> <label for="email">Email:</label></th>
                                <th> <input type="email" value="<?php echo $data["email"]?>" name="email" class="usr_inpt"></th>
                            </tr>

                            <tr>
                                <th><label for="phone">Phone:</label></th>
                                <th><input type="text" value="<?php echo $data["phone"]?>" name="phone" class="usr_inpt"></th>
                            </tr>

                        </table>


                          <input type="submit" value="Save changes">
                      </form>
                     <?php if (isset($_SESSION["message"]))
                        {
                            ?>
            <div id="message_usr"><?=$_SESSION["message"]?></div>
            <?php
                unset($_SESSION["message"]);
            }
                ?>
                  </div>
                  
                  <div class="col-lg-4 col-lg-offset-1" id="pswr_fd">
                      <h4>Change password:</h4>
                      <form action="user_modify_password.php" method="post">
                          <table>
                              
                              <tr>
                                <th><label for="pass_old">Enter current password:</label></th>
                                <th><input type="password"  name="pass_old" class="usr_inpt"></th>
                            </tr>
                              
                              <tr>
                                <th><label for="pass_new1">Enter new password:</label></th>
                                <th><input type="password"  name="pass_new1" class="usr_inpt"></th>
                            </tr>
                            <tr>
                                <th><label for="pass_new2">Confirm new password:</label></th>
                                <th><input type="password"  name="pass_new2" class="usr_inpt"></th>
                            </tr>
                            
                            
                          </table>
                          
                          <input type="submit" value="Save">
                      </form>
                    
                  </div>
		      </div>
		  </div>  
			<br />
			
			<div class="navbar navbar-fixed-bottom"><?php include("../scripts/foot_temp.php") ?></div>
			<!--Foot side-->
		
		
	</body>

</html>