<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
               <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
               <link rel="stylesheet" type="text/css" href= "HomePage.css">
                <meta name="viewport" content="width=device-width, inital-1.8">
                
    </head>
         <body>
           <header>
             <div class="container">
                 <div id="branding">
                     <h1><span class="highlight">The GreenLine</span> Passenger Targeting System </h1>
                </div>
                 
                  <div class="wrapper">
                     <nav> 
                       <ul>
                           <li class="current"><a href="HomePage.php">HOME</a></li>
                           <li class="current"><a href="Passenger.php">PASSENGER</a></li>
                             <li><a href="Login88.html">AdminLogin</a></li>
                            
                        
                         </ul>
                       </nav>
                   </div>
               </div>
            </header>
        
              
              <div class="wrapper">
            
       <h1> Please enter your details:</h1>
                    
                
                        
           <form action = "HomePage.php" method = "POST">
        
                           <input type = "text" name= "Firstname" placeholder= "FIRSTNAME">
                           <br> 
                           <input type = "text" name= "Surname" placeholder= "SURNAME"> 
                           <br> 
                           <input type = "text" name= "Age" placeholder= "AGE">        
                           <br> 
                            <input type = "text" name= "Address" placeholder= "ADDRESS">        
                           <br> 
                            <input type = "text" name= "RISK_TYPE_ID" placeholder= "RISK_TYPE_ID">      
                           <br> 
                           <input type = "email" name= "Email" placeholder= "Email"> <br> 
                           <input type = "password" name= "Password" placeholder= "PASSWORD"><br> 
                           <button type = "submit">SIGN UP </button>
                           <br>
                           <br>
                           <h2 class="message">Already registered? <a href="#">Sign In</a></h2>
         </form>
                  
         <form class="login-form">
             
                          <input type="text" placeholder="username"/>
                          <input type="password" placeholder="password"/>
                          <button>login</button>
              
         </form>    
       
        </div>
      
                 
            <footer class="mainFooter">
           <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
             </footer>
             
        </body>
</html>
