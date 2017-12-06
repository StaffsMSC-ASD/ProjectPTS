<?php
session_start();

include("Connection.php");

$passengers=array();

if(isset($_POST['searchPassenger'] AND $_POST['Firstname'] AND $_POST['Surname'] AND $_POST['Age'] AND $_POST['Address'] AND $_POST['RISK_TYPE_ID']))
{
  $query="SELECT * FROM passenger_detail WHERE firstname=".$_POST['Firstname']."AND surname=".$_POST['Surname']."AND age=".$_POST['Age']."AND address=".$_POST['Address']."AND risk_type_id=".$_POST['RISK_TYPE_ID'];
  $passengers=mysqli_query($link,$query);
  while ($row = mysqli_fetch_array($passengers,MYSQL_NUM)){
    echo $row[0],$row[1],$row[2],$row[3],$row[4],$row[5];
}

}
session_destroy();
?>

<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
               <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
               <link rel="stylesheet" type="text/css" href= "css/HomePage.css">
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
                      <li class="current"><a href="HomePage.php">Home</a></li>
                      <li class="current"><a href="searchPassenger.php">Passenger Search</a></li>
                      <li class="current"><a href="searchFlights.php">Flight Search</a></li>
                      <li class="current"><a href="AdminHome.php">Admin Home</a></li>                       
                   </ul>
                       </nav>
                   </div>
               </div>
            </header>
        
              
              <div class="wrapper">
            
       <h1> Search Passengers</h1>
                    
       <p>Use this form to search through passengers by various criteria -- more blurb to be added </p>        
                        
           <form action = "HomePage.php" method = "POST">
               <!-- Will replace table with CSS and divs -->
               <table>
                   <tr>
                       <td>First Name: </td>
                       <td><input type = "text" name= "Firstname"></td>
                   </tr>
                    <tr>
                       <td>Surname/Family Name:</td>
                       <td><input type = "text" name= "Surname"></td>
                   </tr>
                    <tr>
                       <td> Age:</td>
                       <td> <input type = "text" name= "Age" ></td>
                   </tr>
                    <tr>
                       <td>Address:</td>
                       <td><input type = "text" name= "Address" ></td>
                   </tr>
                   <tr>
                       <td>Risk Type ID:</td>
                       <td> <input type = "text" name= "RISK_TYPE_ID" ></td>
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td><input type = "email" name= "Email" </td>
                   </tr>
               </table>
               <p><input type="submit" name="searchPassenger" value="Search Passenger" />
               </p> 
            </form>
         
       <!-- Not needed 
       <h2 class="message">Already registered? <a href="#">Sign In</a></h2>   
         <form class="login-form">
             
                          <input type="text" placeholder="username"/>
                          <input type="password" placeholder="password"/>
                          <button>login</button>
              
         </form>  -->  
       
        </div>
      
                 
            <footer class="mainFooter">
           <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
             </footer>
             
        </body>
</html>
