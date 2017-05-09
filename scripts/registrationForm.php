   <html>
    <head>
        <title>Registration</title>
         <link href="registrationStyle.css" rel="stylesheet" type="text/css"/>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="registration.js" type="text/javascript"></script>
    </head>
    
    <body>
        
        
        <div class="regF">
            <h2>Fill the form below</h2>
             <div class="insReg">
             <form action="validation.php" method="post" id="registration_form">
                <input type="text" class="inp"  id="name" name="name" value="Name" onfocus="if(this.value=='Name')this.value=''" onblur="if(this.value=='')this.value='Name'">
                <span class="error_form" id="name_error_message"></span>
                <br /> <br />

                
                 <input type="text" class="inp" value ="Surname" id="surname" name="surname" onfocus="if(this.value=='Surname')this.value=''" onblur="if(this.value=='')this.value='Surname'"> <span class="error_form" id="surname_error_message"></span>
                <br /> <br />
                
                <input type="text" class="inp" value ="enter your email" id="email" name="email" onfocus="if(this.value!='')this.value=''" > <span class="error_form" id="email_error_message"></span>
                <br /> <br />
                
                <input type="text" class="inp" value= "Phone number" id="phone" name="phone" onfocus="if(this.value!='')this.value=''" onblur="if(this.value=='')this.value='Phone number'">
                <span class="error_form" id="phone_error_message"></span>
              
                <h3>Protect your information with a password</h3>
                
                <div id="lbl1">
                    <label for="password">Enter your password:</label>
                 </div>
                <input type="password" class="pass" id="password" name="password">
                <span class="error_form" id="password_error_message"></span>
                <br /> <br />
                
                <div id="lbl">
                    <label for="password1">Type it again:</label>
                </div>
                <input type="password" class="pass" id="password1" name="password">
                <span class="error_form" id="retype_error_message"></span>
                <input type="submit" value="Create Account">
                
                </form>
            </div>
        </div>
    </body>
    
    
</html>