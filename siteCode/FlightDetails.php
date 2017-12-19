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
                      <li><a href="HomePage.php">Home</a></li>
                      <li><a href="searchPassenger.php">Passenger Search</a></li>
                      <li><a href="searchFlights.php">Flight Search</a></li>
                                             
                   </ul>
                       </nav>
                   </div>
               </div>
            </header>
        
              
              <div class="wrapper">
            
       <h1> Flight Details Found</h1>
                    
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
            <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
            Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
        </footer>
             
        </body>
</html>