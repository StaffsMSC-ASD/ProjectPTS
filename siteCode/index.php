<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Passenger Targeting System</title>
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href= "css/HomePage.css">
        <meta name="viewport" content="width=device-width, inital-1.8">          
    </head>
    <body>
      <header>
        <div class="container">
        <div id="branding">
        <h1>The GreenLine</span> Passenger Targeting System </h1>
        </div>

             
                <div id="nav"> 
                  <ul>
                      <li class="current"><a href="index.php">Home</a></li>
                      <li class="current"><a href="searchPassenger.php">Passenger Search</a></li>
                      <li class="current"><a href="searchFlights.php">Flight Search</a></li>
                      <li class="current"><a href="AdminHome.php">Admin Home</a></li>                       
                   </ul>
                    </div>
                 <div id="aLogin">
                    
                    <form class="login-form">
                        Admin login:<input type="text" />
                        Password: <input type="password" />
                        <input type="submit" value="LOGIN" class="form button"/>
                    </form>
                </div>
          </div>
       </header>
       

         <section id="boxes">
             <div class="wrapper">
                   <h3>The Green System</h3>
                  <div class="container">
                     <div class="box">
                         <p>
                             GreenLine Systems, provides its customers with the capability to improve decision-making in support of enforcement and facilitation mandates.
                                      Started in 2002 by subject matter experts in border control, risk management, and logistics.
GreenLine provides applications that assess the risk of vessels, cargo and travellers and provides technical consultants to both the U.S. Department
of Homeland Security and Canada’s Canadian Border Security Agency.    With offices in Washington DC, Ottawa, and The Hague, we deliver risk management solutions
for a broad spectrum of defence, intelligence, law, and regulatory enforcement agencies.  Our solutions help analysts and decision-makers address risks to safety,
security, health and revenue. Today, our solutions are operational in the United States, Canada, Europe, Central America, South America, Africa, and the Caribbean
supporting defence, anti-smuggling, and regulatory enforcement missions.
</p>
<h3>List of pages for development purposes and testing</h3>
            <ul>
                <li><a href="searchPassenger.php">Search Passengers</a></li>
                <li><a href="searchFlights.php">Search Flights</a></li>
                <li><a href="PassengerDetails.php">Passenger Details</a></li>
                <li><a href="FlightDetails.php">Flight Details</a></li>
                <li ><a href="ListOfFlights.php">List Flights</a></li>
                <li ><a href="ListOfPassengers.php">List of Passengers</a></li>
                <li ><a href="RiskDetails.html"> Risk Analysis</a></li>
                <li ><a href="AdminHome.php"> Admin Area</a></li>

            </ul>
            </p
                    </div>
                   </div>  
               </div> 
       </section>
       

     <footer class="mainFooter">
      <p>TheTheGreenLineSystem, Copyright &copy; 2017<a href="#" title="The GreenLine System" TheTheGreenLineSystem.com</p>
        </footer>

   </body>
          

</html>
