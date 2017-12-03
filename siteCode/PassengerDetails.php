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
                    
       <p>Use this form to search through flights by various criteria -- more blurb to be added </p>        
                        
           
               <table>
                    <tr>
                        <th width="20%">First Name</th>
                        <th width="20%">Surname</th>
                        <th  width="20%">DOB</th>
                        <th width="20%">Address </th>
                        <th width="20%">Flight No</th>
                        <th width="20%">Action</th>
                   <tr>
                       <td>Jo</td>
                       <td>Bloggs</td>
                       <td>23-03-1979</td>
                       <td>2 The Mall, LD095QQ</td>
                       <td>EZY556</td>
                       <td><a href="PassengerDetails.php"> select </a></td>
                   </tr>
                   <tr>
                       <td>Jo</td>
                       <td>Bloggs</td>
                       <td>23-03-1979</td>
                       <td>2 The Mall, LD095QQ</td>
                       <td>EZY556</td>
                       <td><a href="PassengerDetails.php"> select </a></td>
                   </tr>
                   <tr>
                       <td>Jo</td>
                       <td>Bloggs</td>
                       <td>23-03-1979</td>
                       <td>2 The Mall, LD095QQ</td>
                       <td>EZY556</td>
                       <td><a href="PassengerDetails.php"> select </a></td>
                   </tr>
                   <tr>
                       <td>Jo</td>
                       <td>Bloggs</td>
                       <td>23-03-1979</td>
                       <td>2 The Mall, LD095QQ</td>
                       <td>EZY556</td>
                       <td><a href="PassengerDetails.php"> select </a></td>
                   </tr>
                    
               </table>
               
       
        </div>
      
                 
            <footer class="mainFooter">
           <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
             </footer>
             
        </body>
</html>