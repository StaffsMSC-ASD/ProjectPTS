<?php
session_start();


include("Connection.php");

flights=array();

if(isset($_POST['searchFlight'])AND $_POST['Crew'] AND $_POST['Destination'] AND $_POST['Origin'] AND $_POST['flight_capacity']))
{
  $query="SELECT * FROM FLIGHT_DETAIL WHERE destination=".$_POST['destination']."AND crew=".$_POST['Crew']."AND origin=".$_POST['Origin']."AND flight_capacity=".$_POST['Flight_capacity'];
  $flights=mysqli_query($link,$query);
    while ($row = mysqli_fetch_array($flights,MYSQL_NUM)){
    echo $row[0], $row[1]),$row[2],$row[3],$row[4];
  
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
            
       <h1> Search Flights</h1>
                    
       <p>Use this form to search through flights by various criteria -- more blurb to be added </p>        
                        
           <form action = "HomePage.php" method = "POST">
               <!-- Will replace table with CSS and divs -->
               <table>
                   <tr>
                       <td>Flight no: </td>
                       <td><input type = "text" name= "flightNo"></td>
                   </tr>
                    <tr>
                       <td>Airline: </td>
                       <td><input type = "text" name= "airLine"></td>
                   </tr>
                    <tr>
                       <td>Depart from</td>
                       <td> <input type = "text" name= "dptFrom" ></td>
                   </tr>
                    <tr>
                       <td>Destination:</td>
                       <td><input type = "text" name= "destination" ></td>
                   </tr>
                   <tr>
                       <td>Connections</td>
                       <td> <input type = "text" name= "fltConnection" ></td>
                   </tr>
                   <tr>
                       <td>Ticekt Details:</td>
                       <td><input type = "email" name= "tckDetails" </td>
                   </tr>
               </table>
               <p><input type="submit" name="searchFlight" value="Search Flights" />
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
