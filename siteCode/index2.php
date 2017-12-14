
<?php


session_start();
include 'DBConection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// The table name must be changed as this takes the name of my server test drive 

$sql = "SELECT * FROM users7  WHERE username = '$username' AND password ='$password'";
 $result =$dbCon->query($sql);

if (!$row = $result->fetch_assoc()) {
    echo "Your username or password is incorrect!";
      header('Location: test4.php');
    
}else{
    
    $_SESSION['id'] = $row['id'];
    
  //echo "You logged in!";
    
   
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
               <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
               <link rel="stylesheet" type="text/css" href= "css/HomePage.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
         <body>
           <header>
             <div class="container">
                 <div id="branding" align="center">
                     <h1 align="center"><span class="highlight">The GreenLine</span> 
                     Passenger Targeting System </h1>
               </div>
                 
                  <div class="wrapper">
                    
               </div>
             </div>
</header><br>

          
        
              <section id="boxes">
                <div class="wrapper">
                      
    <div align="center"><h1>Admin Login</h1></div><br>
   
  <div class="form" align="center">
   
    <form class="login-form" action = "HomePage.php" method = "POST">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
     <input type="submit" value="LOGIN" class="form button"/>
     
    </form>
  </div>
</div>
                              
                </div>
                </div>  
                </div> 
         </section>
                 
     <footer class="mainFooter">
        <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
        Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
    </footer>
        
    </body>
</html>