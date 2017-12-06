<?php
/*

session_start();

include("Connection.php");

flights=array();

if(isset($_POST['search3']));
{
  $query="SELECT * FROM FLIGHT_DETAIL WHERE destination=".$_POST[destination]."AND origin=".$_POST[origin].";";
  $flights=mysqli_query($link,$query);
    while ($row = mysql_fetch_array($flights,MYSQL_NUM)){
    echo $row[0], $row[1]),$row[2],$row[3],$row[4];
  
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
            
       <h1> Passenger Details Found</h1>
                    
       <p>Use this form to search through flights by various criteria -- more blurb to be added </p>        
                        
           
               <table>
                    <tr>
                        <th width="20%">Flight No</th>
                        <th width="20%">Airline</th>
                        <th  width="20%">From</th>
                        <th width="20%">Destination</th>
                        <th width="20%">Action</th>
                   <tr>
                       <td>BA123</td>
                       <td>British Airways</td>
                       <td>London</td>
                       <td>Toronto</td>
                       
                       <td><a href="ListOfFlights.php"> select </a></td>
                   </tr>
                   <tr>
                       <td>BA123</td>
                       <td>British Airways</td>
                       <td>London</td>
                       <td>Toronto</td>
                       
                       <td><a href="ListOfFlights.php"> select </a></td>
                   </tr>
                   <tr>
                       <td>BA123</td>
                       <td>British Airways</td>
                       <td>London</td>
                       <td>Toronto</td>
                       
                       <td><a href="ListOfFlights.php"> select </a></td>
                   </tr> 
               </table>
               
       
        </div>
      
                 
            <footer class="mainFooter">
           <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
             </footer>
             
        </body>
</html>