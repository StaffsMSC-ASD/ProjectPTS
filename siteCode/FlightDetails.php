<?php
/*
session_start();

include("connection.php");

$query = "SELECT * FROM passengers WHERE pasenger_id=".$_SESSION['pasenger_id'];

if(isset($_POST['submit'])
 
 {
   $result=mysqli_query(&link,$query);
   
 }
*/
?>
 <!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
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
                           <li class="current"><a href="index.php">Home</a></li>
                           <li class="current"><a href="Passenger.php">Passenger Search</a></li>
                           <li class="current"><a href="Flights.php">Flight Search</a></li>
                           <li class="current"><a href="AdminHome.php">Admin Home</a></li>                       
                        </ul>
                       </nav>
                   </div>
               </div>
            </header>
        
              
              <div class="wrapper">
            
       <h1> Passenger Details Found</h1>
                    
       <p>Passenger Details found for passenger Jo Bloggs</p>        
                        
           
               <table>
                    
                   <tr>
                      <td>Flight no: </td>
                       <td>BA123</td>
                   </tr>
                  <tr>
                       <td>Airline:</td>
                       <td>BA</td>
                   </tr>
                   <tr>
                       <td>From</td>
                       <td>London</td>
                   </tr>
                   <tr>
                       <td>Destination</td>
                       <td>Toronto</td>
                   </tr>
                                      <tr>
                       <td>Destination</td>
                       <td>Toronto</td>
                   </tr>
               </table>
               
       <form action = "someAction" method = "POST">
       <p><input type="submit" name="getRisk" value="View Risk Analysis Details" />
               </p> 
       </form>

              </div>
      
                 
            <footer class="mainFooter">
           <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
             </footer>
             
        </body>
</html>